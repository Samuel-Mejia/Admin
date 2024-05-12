<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empleado extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'empleados';

    protected $fillable = [
        'name', 'lastname', 'cargo', 'salario', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

