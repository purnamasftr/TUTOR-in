<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
  public function ProfilTutor($id)
  {
    $user = DB::table('users')->join('fakultas', 'fakultas.id_fakultas', '=', 'users.fakultas')
                              ->join('departemen', 'departemen.id_departemen', '=', 'users.departemen')
                                  ->where('id', '=', $id)
                                  ->first();;
=======
    $user = User::whereId($id)->first()->join('departemen', 'departemen.id_departemen', '=', User::find());
>>>>>>> 2ffbfe0ea9b094f202549a0c7a395c1017c2026c
    $kelas = DB::table('kelas')->join('mata_kuliah', 'kelas.id_matakuliah','=', 'mata_kuliah.id_matakuliah')
                               ->join('departemen', 'departemen.id_departemen','=', 'mata_kuliah.id_departemen')
                               ->select('kelas.*','mata_kuliah.nama_matkul', 'departemen.nama_departemen')
                               ->where('kelas.id_tutor', $id)
                               ->get();
    return view('pages.profil-tutor', compact('user'), compact('kelas'));
  }

}
