<?php

namespace Wzrd\CalandraTexDomain\Filament\CtCustomer\Widgets;

use Filament\Widgets\Widget;

class LinkWidget extends Widget
{
    protected static string $view = "CtDomain::admin.widgets.new-order";
    protected string $linkIcon = "heroicon-o-arrow-left";
    protected string $widgetLink = "/admin/";
    protected string $widgetLabel = "Crear una nueva Propuesta de Pedido";

}
