<?php

namespace Wzrd\Customer\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Wzrd\Customer\Model\CustomerAttributesValues;

class Customer extends Authenticatable
{
    use Notifiable;

    protected $guard = 'customer';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function attributes()
    {
        return $this->hasMany(CustomerAttributesValues::class, 'customer_id');
    }
}
