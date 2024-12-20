<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computers extends Model
{
    protected $fillable = ['id','computer_name','model','operating_system','processor','memory','available'];
}
