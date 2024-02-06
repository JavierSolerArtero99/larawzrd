<?php

namespace Wzrd\Customer\Model;

use Illuminate\Database\Eloquent\Model;
use Wzrd\Customer\Model\CustomerAttributesValues;

class CustomerAttributes extends Model
{
    protected $table = 'customer_attributes';

    protected $fillable = [
        'code', 'label', 'frontend_type', 'backend_type'
    ];
}
