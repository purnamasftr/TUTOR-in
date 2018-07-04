<?php
namespace App\Http\Controllers;
use Auth;
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
        return view('/auth/login');
    }
    public function WebSignup()
    {
        return view('/auth/register');
    }

}
