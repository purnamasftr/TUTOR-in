<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Item;

class WebController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function WebHome()
    {
        return view('WebHome');
    }
    /**
     * Show the my users page.
     *
     * @return \Illuminate\Http\Response
     */
    public function WebUser()
    {
        return view('WebUser');
    }

}
