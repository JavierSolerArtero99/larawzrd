<?php

namespace Wzrd\Customer\Tables\Columns;

use Closure;
use Filament\Tables\Columns\Column;
use Wzrd\Customer\Model\CustomerAttributes;
use Wzrd\Customer\Model\CustomerAttributesValues;

class DynamicAttribute extends Column
{
    protected string $view = 'WzrdCustomer::WzrdCustomer.admin.tables.columns.status-switcher';
    protected CustomerAttributes $attribute;

    public function setAttribute(CustomerAttributes $attr): Column
    {
        $this->attribute = $attr;
        return $this;
    }

    public function attributeValue()
    {
        $customer = $this->getRecord();
        $attrValue = CustomerAttributesValues
            ::where([
                ['customer_id', '=', $customer->id],
                ['attribute_id', '=', $this->attribute->id],
            ])
            ->first();
            
        return $attrValue ? $attrValue->value : "-";
    }
}
