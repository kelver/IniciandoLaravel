@extends('extends.base')

@section('title', 'Bar Extends')

@section('container')
    <h2>Usuários</h2>
    <ul>
        @foreach($users as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
@endsection