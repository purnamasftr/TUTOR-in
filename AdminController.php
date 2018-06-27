<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Item;

class AdminController extends Controller
{
    public function AdminHome()
    {
        return view('AdminHome');
    }
    
    public function AdminUser()
    {
        return view('AdminUser');
    }

}
