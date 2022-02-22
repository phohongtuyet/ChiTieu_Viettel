<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{

    public function __construct()
    {
    }

    public function getHome()
    {
        if(Auth::check())
        {
            return view('home');
        }
        else
        {
            return view('auth.login');
        }
    }
}
