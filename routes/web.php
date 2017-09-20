<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix'=>'pedidos'], function (){
    Route::get('/', function () {
        return 'Lista de usuários.';
    });

    Route::get('add', function () {
        return 'Adicionar usuários.';
    });

    Route::get('{id}', function ($id) {
        return "Este é o usuário $id.";
    });

    Route::get('{id}/edit', function ($id) {
        return "Editando o usuário $id.";
    });
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('foo', function () {
    return 'Olá.';
});

Route::get('extends/bar', function () {
    return view('extends.bar');
});

Route::get('extends/baz', function () {
    return view('extends.baz');
});

Route::get('foo/bar', function () {
    return view('foo.bar', ['foo'=>'asdf', 'bar'=>'1234', 'html'=>'<a>asd</a>', 'htmlSec'=>'<a>asd</a>']);
});

/*Usando Controller*/

Route::group(['prefix'=>'user'], function (){
    Route::get('/', ['uses'=>'UserController@index']);
    Route::get('/add', ['uses'=>'UserController@create']);
    Route::post('/add', ['uses'=>'UserController@post']);
    Route::get('{id}', ['uses'=>'UserController@show']);
});