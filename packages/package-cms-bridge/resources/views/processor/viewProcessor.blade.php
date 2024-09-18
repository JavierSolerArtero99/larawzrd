<!-- @ extends('WzrdTheme::layouts.' . $layout) -->
@extends('WzrdTheme::layouts.default')

@section('title', $title)

@section('content')
    @foreach ($slots as $slot)
        <!---->
    @endforeach
@endsection

