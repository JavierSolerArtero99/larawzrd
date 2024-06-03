<?php

namespace Wzrd\CalandraTexDomain\Filament\CtOrder\Widgets;

use Filament\Widgets\Widget;

class CtOrderHistory extends Widget
{
    protected static string $view = "CtDomain::admin.widgets.new-order";
    protected string $linkIcon = "heroicon-o-list-bullet";
    protected string $linkColor = 'color: #FFC600';
    protected string $widgetLink = "/admin/";
    protected string $widgetLabel = "Histórico de las Propuestas de Pedido enviadas";
}
