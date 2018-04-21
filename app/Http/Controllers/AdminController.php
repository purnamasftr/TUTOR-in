<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Item;

class AdminController extends Controller
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
    public function AdminHome()
    {
        return view('AdminHome');
    }
    /**
     * Show the my users page.
     *
     * @return \Illuminate\Http\Response
     */
    public function AdminUser()
    {
        return view('AdminUser');
    }

}
