<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = array('first_name', 'last_name', 'phone', 'user_id');
    protected $guarded = []; 

    protected $dates = ['deleted_at'];
}
