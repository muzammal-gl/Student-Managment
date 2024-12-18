<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Student extends Authenticatable
{
    protected $fillable = ['teacher_id', 'name', 'phone_number', 'email', 'status', 'password'];

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }
    

    protected $hidden = [
        'password',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

}

