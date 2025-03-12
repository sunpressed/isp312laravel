<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

//    protected $table = 'users';


    protected $fillable = [
        'FIO',
        'email',
        'birthday',
        'password',
    ];

//    protected $guarded = [
//        ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

//public $timestamps = false;

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
