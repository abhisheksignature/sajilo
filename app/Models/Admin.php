<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'admin';
    protected $fillable = ['first_name', 'last_name', 'email','phone_number','image_path','address', 'password'];

    protected $hidden = [
        'password', 'remember_token',
    ];
}


        
    
    
