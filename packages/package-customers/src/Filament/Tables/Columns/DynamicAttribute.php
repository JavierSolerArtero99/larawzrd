<?php

namespace Wzrd\Customer\Filament\Tables\Columns;

use Filament\Tables\Columns\Column;
use Wzrd\Customer\Model\CustomerAttributes;
use Wzrd\Customer\Model\CustomerAttributesValues;

class DynamicAttribute extends Column
{
    protected string $view = 'WzrdCustomer::admin.tables.columns.dynamic-attribute';
    protected CustomerAttributes $attribute;

    public function setAttribute(CustomerAttributes $attr): Column
    {
        $this->attribute = $attr;
        return $this;
    }

    public function attributeValue(): ?CustomerAttributesValues
    {
        $customer = $this->getRecord();
        $attrValue = CustomerAttributesValues
            ::where([
                ['customer_id', '=', $customer->id],
                ['attribute_id', '=', $this->attribute->id],
            ])
            ->first();

        return $attrValue;
    }
}
