<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'address', 
        'gender',
        'birthdate',
        'email', 
        'password',
        'profession_id',
        'vehicle_id',
        'municipality_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function professions()
    {
        return $this->hasOne(Profession::class);
    }

    public function vehicles()
    {
        return $this->hasOne(Vehicle::class);
    }

    public function municipalities()
    {
        return $this->hasOne(Municipality::class);
    }
}
