@extends('WzrdTheme::WzrdTheme.layouts.default')

@section('content')
<main class="flex"> 
    <div class="bg-red-200">@yield('left')</div>
    <div class="bg-green-200">@yield('right')</div>
</main>
@endsection