@extends('extends.base')

@section('title', 'Bar Extends')

@section('container')
    <h2>Bar</h2>
    <p>lkuliçl</p>
    <ul>
        @foreach(['foo', 'bar', 'baz'] as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
@endsection