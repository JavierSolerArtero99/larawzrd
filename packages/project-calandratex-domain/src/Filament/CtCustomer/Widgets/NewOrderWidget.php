<?php

namespace Wzrd\CalandraTexDomain\Filament\CtCustomer\Widgets;

use Filament\Widgets\Widget;

class NewOrderWidget extends Widget
{
    protected static string $view = "CtDomain::admin.widgets.new-order";
    protected string $widgetLabel = "Crear una nueva Propuesta de Pedido";
    protected string $widgetLink = "/admin/";

}
