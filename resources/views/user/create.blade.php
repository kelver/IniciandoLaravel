@extends('extends.base')

@section('title', 'Baz Extends')

@section('container')
    <form action="/user/add" method="post">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="email" placeholder="E-Mail">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" value="Submit">
    </form>
@endsection