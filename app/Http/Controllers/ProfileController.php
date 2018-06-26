<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function profile($id){
      $user = User::whereId($id)->first();

      return view('pages.profil-tutor', compact('user'));
    }
}
