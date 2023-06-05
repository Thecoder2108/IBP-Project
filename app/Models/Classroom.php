<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    protected $fillable = [ 'name' , 'course_id', 'description', 'teachers_id' ];


    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

}
