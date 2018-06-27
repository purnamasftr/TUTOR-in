<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Item;

class UserController extends Controller
{
    
}

public function read(User $user)
{
  $user = Auth::user();
  $tut = DB::table('tutor')->pluck('nama_tutor', 'id_user_tutor');

  return view('users.read', compact('user'), compact('tut'));
}
