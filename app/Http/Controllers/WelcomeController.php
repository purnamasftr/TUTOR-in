<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Item;
class WebhomeController extends Controller
{
    public function WebHome()
    {
        return view('webhome');
    }
    public function WebLogin()
    {
        return view('/pages/login');
    }
    public function WebSignup()
    {
        return view('/pages/signup');
    }
}
