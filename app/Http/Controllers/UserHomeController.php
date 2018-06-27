<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Item;
use Auth;


class UserHomeController extends Controller
{
    public function UserHome()
    {
      $user = Auth::user();
      return view('pages.userhome', compact('user'));
    }
    public function cariTutor()
    {
        return view('pages.cari-tutor');
    }


}
