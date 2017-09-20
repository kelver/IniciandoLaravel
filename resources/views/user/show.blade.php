@extends('extends.base')

@section('title', 'Baz Extends')

@section('container')
    <h2>Show User</h2>
    @if ($id)
        <p>Eu sou o usuário {{ $id }}</p>
    @endif
@endsection