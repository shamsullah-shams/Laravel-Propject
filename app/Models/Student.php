<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = array('first_name', 'last_name', 'section_id', 'father_id');
    protected $guarded = []; 
}
