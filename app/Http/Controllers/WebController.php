<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Item;

class WebController extends Controller
{
    public function WebHome()
    {
        return view('WebHome');
    }
    public function WebLogin()
    {
        return view('/pages/login');
    }

}
