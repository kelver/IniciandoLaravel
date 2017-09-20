<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = ['Wesley', 'Matheus', 'Guilherme'];
        return view('user.index', compact('users'));
    }
    public function show($id)
    {
        return view('user.show', compact('id'));
    }
    public function create()
    {
        return view('user.create');
    }
    public function post(Request $request)
    {
        var_dump($request->except('_token'));
    }
}
