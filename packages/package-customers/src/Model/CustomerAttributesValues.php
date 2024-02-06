<?php

namespace Wzrd\Customer\Model;

use Illuminate\Database\Eloquent\Model;
use Wzrd\Customer\Model\Customer;
use Wzrd\Customer\Model\CustomerAttributes;

class CustomerAttributesValues extends Model
{
    protected $fillable = [
        'customer_id', 'attribute_id', 'value'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function attribute()
    {
        return $this->belongsTo(CustomerAttributes::class);
    }
}
