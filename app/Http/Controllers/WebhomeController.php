<?php
namespace App\Http\Controllers;
// namespace App\Http\Controllers\Auth;
use Auth;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Item;
class WebhomeController extends Controller
{
    // use AuthenticatesUsers;
    // protected $redirectTo = 'userhome';
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
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
