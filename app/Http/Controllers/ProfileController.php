<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function profile($id){
      $user = DB::table('users')->join('departemen', 'departemen.id_departemen', '=', 'users.departemen')
                                ->join('fakultas', 'fakultas.id_fakultas', '=', 'users.fakultas')
                                ->where('users.id', $id)
                                ->select('users.*', 'fakultas.nama_fakultas', 'departemen.nama_departemen')
                                ->get()

      return view('pages.profil-tutor', compact('user'));
    }
}
