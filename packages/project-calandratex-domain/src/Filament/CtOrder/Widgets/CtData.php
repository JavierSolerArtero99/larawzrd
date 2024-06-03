<?php

namespace Wzrd\CalandraTexDomain\Filament\CtOrder\Widgets;

use Filament\Widgets\Widget;

class CtData extends Widget
{
    protected static string $view = "CtDomain::admin.widgets.new-order";
    protected string $linkIcon = "heroicon-o-user";
    protected string $linkColor = 'color: #5800FF';
    protected string $widgetLink = "/admin/";
    protected string $widgetLabel = "Datos de registro";
}
