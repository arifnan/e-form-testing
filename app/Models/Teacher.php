<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['nip', 'name', 'gender', 'email', 'password', 'subject', 'address'];

    protected $hidden = ['password'];
}
