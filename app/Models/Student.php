<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['teacher_id', 'name', 'phone_number', 'email', 'status'];

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }
    
}
