<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['name', 'gender', 'email', 'password', 'grade', 'address'];

    protected $hidden = ['password'];
}
