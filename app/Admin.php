<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin  extends Authenticatable
{

    use HasFactory;
    protected $guard = 'admin';

    protected $fillable = [
        'fname','lname', 'email', 'password','phone','img',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
