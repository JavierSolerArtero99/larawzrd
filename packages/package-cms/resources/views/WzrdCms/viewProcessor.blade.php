@extends('WzrdTheme::layouts.' . $layout)

@section('title', $title)

@foreach ($slots as $slot)
    @section($slot['title'])
        <p>{{$slot['content']}}</p>
    @endsection
@endforeach
