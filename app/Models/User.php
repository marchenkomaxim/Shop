<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    const GENDER_MALE = 1;
    const GENDER_FEMALE = 2;

    protected $table = 'users';
    protected $guarded = false;

    static function getGenders()
    {
        return [
            self::GENDER_MALE => 'Чоловіча',
            self::GENDER_FEMALE => 'Жіноча',
        ];
    }

    protected $fillable = [
        'name', 'surname', 'email', 'middle_name', 'age', 'gender', 'address', 'password'
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
