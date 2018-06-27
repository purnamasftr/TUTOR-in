<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Item;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Support\Facades\DB;

use Auth;
use App\User;
use Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


class UserHomeController extends Controller
{
    public function UserHome()
    {
      $user = Auth::user();
      return view('pages.userhome', compact('user'));
    }
    public function CariTutor()
    {
        $fak = DB::table('fakultas')->pluck('nama_fakultas', 'id_fakultas');

        return view('pages.cari-tutor', compact('fak'));
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        $kelas_tutor = DB::table('kelas')->where('id_matakuliah', 'LIKE', '%' . $query . '%')->paginate(10);
        //$hasil = User::where('name', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('pages.hasil-cari', compact('kelas_tutor', 'query'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('pages.userhome');
    }

    public function mytut()
    {
      $tut = DB::table('tutor')->pluck('nama_tutor', 'id_user_tutor');
      return view('home', compact('tut'));
    }

    public function showChangePasswordForm(){
        return view('auth.changepassword');
    }
    public function changePassword(Request $request){

        if (!(Hash::check($request->get('current-password'),  Auth::user()->password ))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");

    }

}
