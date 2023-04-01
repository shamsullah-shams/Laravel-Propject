<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Father;
use App\Models\Section;
use Illuminate\Database\Eloquent\SoftDeletes;


class Student extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function father()
    {
        return $this->belongsTo(Father::class, 'father_id');
    }

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    protected $fillable = array('first_name', 'last_name', 'section_id', 'father_id');
    protected $guarded = []; 

    protected $dates = ['deleted_at'];
}
