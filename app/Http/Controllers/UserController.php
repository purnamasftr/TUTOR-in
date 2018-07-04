<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Item;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $id = Auth::user()->id;
        $user = DB::table('users')->join('fakultas', 'fakultas.id_fakultas','=', 'users.fakultas')
                                   ->select('users.*','fakultas.nama_fakultas')
                                   ->where('users.id', $id)
                                   ->get();
        return view('users.index', compact('user'));
    }
     public function edit()
     {
         $user = Auth::user();
         $fak = DB::table('fakultas')->pluck('nama_fakultas', 'id_fakultas');
         return view('users.edit-profil', compact('user'), compact('fak'));
     }
     public function update(User $user)
     {
         $this->validate(request(), [
             'name' => 'required',
             'jk' => 'required',
             'telp' => 'required',
             'alamat' => 'required',
             'fakultas' => 'required',
             'departemen' => 'required'
         ]);

         $user->name = request('name');
         $user->jk = request('jk');
         $user->telp = request('telp');
         $user->alamat = request('alamat');
         $user->fakultas = request('fakultas');
         $user->departemen = request('departemen');
         $user->bio = request('bio');
         $user->tentang = request('tentang');
         $user->pengalaman = request('pengalaman');
         $user->riwayat = request('riwayat');
         $user->jadwal = request('jadwal');

         $user->save();
         return redirect()->route('users.edit-profil')->with('success','Profile updated successfully');
     }
}
