<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Item;


class UserController extends Controller
{
    public function UserHome($id)
    {
      $user = User::whereId($id)->first();
      return view('pages.user-home', compact('user'));
    }
    public function ProfilTutor($id)
    {
      $user = User::whereId($id)->first()
                                ->join
      ;
      $kelas = DB::table('kelas')->join('mata_kuliah', 'kelas.id_matakuliah','=', 'mata_kuliah.id_matakuliah')
                                 ->join('departemen', 'departemen.id_departemen','=', 'mata_kuliah.id_departemen')
                                 ->select('kelas.*','mata_kuliah.nama_matkul', 'departemen.nama_departemen')
                                 ->where('kelas.id_tutor', $id)
                                 ->get();
      return view('pages.profil-tutor', compact('user'), compact('kelas'));
    }
    public function CariTutor()
    {
        return view('pages.cari-tutor');
    }
}
