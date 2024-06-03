<?php

namespace Wzrd\CalandraTexDomain\Filament\CtOrder\Widgets;

use Filament\Widgets\Widget;

class NewCtOrder extends Widget
{
    protected static string $view = "CtDomain::admin.widgets.new-order";
    protected string $linkIcon = "heroicon-o-plus-circle";
    protected string $linkColor = 'color: #00DFA2';
    protected string $widgetLink = "/admin/";
    protected string $widgetLabel = "Crear una nueva Propuesta de Pedido";
}
