<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\User;
use Auth;

class PictureController extends Controller
{

  public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = Auth::user();
        return view('picture', compact('user'));
    }

     public function update(Request $request)
     {
         $this->validate(request(), [
             'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
         ]);
         $users = Auth::user();
         $avatar = $request->file('picture')->store('avatars');
         $request->user()->update([
           'picture' => $avatar
           ]);
         return redirect()->back()->with('success','Profile updated successfully');
     }
}
