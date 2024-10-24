<?php

namespace Wzrd\Customer\Model;

use Illuminate\Database\Eloquent\Model;

class CustomerAttributes extends Model
{
    protected $table = 'customer_attributes';

    protected $fillable = [
        'code', 'label', 'frontend_type', 'backend_type'
    ];
}
