<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

// class Admin extends Model
// {
//     use HasFactory;
// }

class Admin extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens, HasRoles;
    
    protected $guard = 'admin';
    
    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}

