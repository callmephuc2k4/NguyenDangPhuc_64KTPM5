<?php

namespace App\Http\Controllers;

use App\Models\Computers;
use App\Models\Issues;
use Illuminate\Http\Request;

class IssuesController extends Controller
{
    public function index(){
        $issues = Issues::with('computer')->paginate(10);
        return view('Issues.index',compact('issues'));
    }

    public function edit($id){
        $issues = Issues::findOrFail($id);
        $computers = Computers::all();
        return view('Issues.edit',compact('issues','computers'));
    }
    public function delete($id){
        $issues = Issues::findOrFail($id);
        $issues->delete();
        return redirect()->route('Issues.index')->with('success', 'Issue deleted successfully.');
    }
    public function update(Request $request, $id) {
        // Kiểm tra dữ liệu đầu vào (validation)
        $request->validate([
            'computer_id' => 'required',
            'reported_by' => 'required',
            'reported_date' => 'date',
            'description' => 'required',
            'urgency' => 'required',
            'status' => 'required',
        ]);
    
        // Tìm đối tượng Thesis cần cập nhật
        $issues = Issues::find($id);
        
        // Cập nhật thông tin
        $issues->update($request->all());
    
        // Điều hướng trở lại trang index với thông báo thành công
        return redirect()->route('Issues.index')->with('success', 'Đồ án được cập nhật thành công');
    }
    public function create(){
        $computers = Computers::all();
        return view('Issues.create',compact('computers'));
    }
    public function save(Request $request)
    {
        $request->validate([
            'computer_id' => 'required',
            'reported_by' => 'required',
            'reported_date' => 'required|date',
            'description' => 'required',
            'urgency' => 'required',
            'status' => 'required'
        ]);

        Issues::create($request->all());

        return redirect()->route('Issues.index')->with('success', 'Đồ án đã được thêm thành công!');
    }
}