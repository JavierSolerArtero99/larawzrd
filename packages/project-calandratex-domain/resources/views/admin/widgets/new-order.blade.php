<x-filament-widgets::widget>
    <x-filament::section>
        <div class="flex justify-center items-center text-xl gap-4">
            <div>@svg($this->linkIcon, 'w-6 h-6', ['style' => 'color: #555'])</div>
            <a href="{{$this->widgetLink}}">{{$this->widgetLabel}}</a>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
