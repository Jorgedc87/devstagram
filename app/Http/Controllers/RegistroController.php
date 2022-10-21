<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function index()
    {
        return view('auth.registro');
    }

    public function store(Request $request)
    {
        // dd($request->get('name'));

        // Validación

        $this->validate($request,[
            'name' => 'required|max:30',
            'username' => 'required|unique:users|min:6|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required'
        ]);
    }
}
