<?php

namespace Wzrd\HorusDomain\Model\Tenancy;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class HorusCustomers extends Authenticatable
{

    use Notifiable;
    protected $guard = 'horus_customers';

    protected $fillable = [
        'name', 'email', 'password', 'slug',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
