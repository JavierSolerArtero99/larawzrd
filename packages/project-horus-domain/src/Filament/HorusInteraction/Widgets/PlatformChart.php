<?php

namespace Wzrd\HorusDomain\Filament\HorusInteraction\Widgets;

use Filament\Widgets\ChartWidget;

class PlatformChart extends ChartWidget
{
    protected static ?string $heading = 'Devices';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Blog posts created',
                    'data' => [90, 10],
                    'backgroundColor' => ['yellow', 'green'],
                ],
            ],
            'labels' => ['Jan', 'Feb'],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
