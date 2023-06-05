<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [ 'phone' , 'password','user_id' ];



    public function classrooms()
    {
        return $this->hasOne(Classroom::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
