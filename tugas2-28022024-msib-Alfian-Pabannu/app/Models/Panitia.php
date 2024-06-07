<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panitia extends Model
{
    use HasFactory, Authenticatable;

    protected $fillable = [
        'nama', 'email', 'password', 'jabatan',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
