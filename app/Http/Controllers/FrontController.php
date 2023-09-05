<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public  function home()
    {
        return view('Front.HomePage.home');
    }

    public function login()
    {
        return view('Front.userauth.login');
    }
}
