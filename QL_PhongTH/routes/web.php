<?php

use App\Http\Controllers\IssuesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',IssuesController::class . '@index')->name('Issues.index');
Route::get('/Issues/{issue}/edit',IssuesController::class . '@edit')->name('Issues.edit');
Route::get('/Issues/{issue}/index',IssuesController::class . '@delete')->name('Issues.delete');
Route::put('/Issues/{id}', IssuesController::class . '@update')->name('Issues.update');
Route::get('/Issues/create',IssuesController::class . '@create')->name('Issues.create');
Route::post('/Issues/save',IssuesController::class . '@save')->name('Issues.save');