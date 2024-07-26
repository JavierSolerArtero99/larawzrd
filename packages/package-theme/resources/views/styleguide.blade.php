@extends('WzrdTheme::layouts.' . $layout)

@section('title', $title)

@section('content')
    <div class="boxed flex flex-col gap-5">
        <!-- Headings -->
        <section class="flex flex-col gap-1">
            <span class="text-xs">Heading 1</span>
            <span class="text-sm">Heading 2</span>
            <span class="text-base">Heading 3</span>
            <span class="text-lg">Heading 4</span>
            <span class="text-xl">Heading 5</span>
            <span class="text-2xl">Heading 6</span>
            <span class="text-3xl">Heading 7</span>
            <span class="text-4xl">Heading 8</span>
            <span class="text-5xl">Heading 9</span>
            <span class="text-6xl">Heading 10</span>
        </section>
        <!-- BUTTONS -->
        <section class="flex gap-1 ">
            <div class="btn btn-primary">BTN PRIMARY</div>
            <div class="btn btn-secondary">BTN SECONDARY</div>
            <div class="btn btn-light-fill">BTN LIGHT FILL</div>
            <div class="btn btn-dark-fill">BTN DARK FILL</div>
            <div class="btn btn-success">BTN SUCCESS</div>
            <div class="btn btn-warning">BTN WARNING</div>
            <div class="btn btn-error">BTN ERROR</div>
        </section>
    </div>
@endsection
