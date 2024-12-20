<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function new()
    {
        return view('newCalled');
    }

    public function consult()
    {
        return view('consultCalled');
    }

    public function users()
    {
        return view('users');
    }
}
