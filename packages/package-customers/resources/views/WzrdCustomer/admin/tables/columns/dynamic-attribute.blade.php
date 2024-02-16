@php
    $value = $attributeValue() ? $attributeValue()->value : "";
@endphp

<div>
    {{ $value }}
</div>
