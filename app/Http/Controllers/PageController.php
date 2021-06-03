<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function tampil()
    {
        return view('hello');
    }



    public function sprei()
    {
        return view('sprei-kasur');
    }



    public function handuk()
    {
        return view('handuk-mandi');
    }

    public function fyamaha()
    {
        return view('yamaha');
    }

    public function home()
    {
        return view('beranda');
    }

    public function carousel()
    {
        return view('karousel');
    }
    public function login()
    {
        return view('login');
    }
    public function fQuiz()
    {
        return view('quiz');
    }
}
