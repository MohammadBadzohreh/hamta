<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    public static $TYPES = [
        self::USER_SUPER_ADMIN,
        self::USER_MANAGER,
        self::USER_STUDENT,
        self::USER_TEACHER
    ];
    const USER_SUPER_ADMIN = "super_admin";
    const USER_MANAGER = "manager";
    const USER_STUDENT = "student";
    const USER_TEACHER = "teacher";
    protected $fillable = [
        'name',
        'email',
        'password',
        "access_level",
        "verified_code",
        "verified_at",
        "feild",
        "grade",
        "national_code",
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
