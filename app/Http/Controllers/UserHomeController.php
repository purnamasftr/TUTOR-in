<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Item;
use Auth;


class UserHomeController extends Controller
{
    public function UserHome()
    {
      $user = Auth::user();
      $id = Auth::user()->id;
      $acc = DB::table('member')->join('kelas', 'kelas.id_kelas', '=', 'member.id_kelas')
                                    ->join('mata_kuliah', 'mata_kuliah.id_matakuliah', '=', 'kelas.id_matakuliah')
                                    ->join('users', 'users.id', '=', 'member.id_tutor')
                                    ->where('id_siswa', '=', $id)
                                    ->where('status', '=', 2)
                                    ->select('member.*', 'users.name','users.picture', 'kelas.*', "mata_kuliah.*")
                                    ->get();
      $pending = DB::table('member')->join('kelas', 'kelas.id_kelas', '=', 'member.id_kelas')
                                    ->join('mata_kuliah', 'mata_kuliah.id_matakuliah', '=', 'kelas.id_matakuliah')
                                    ->join('users', 'users.id', '=', 'member.id_tutor')
                                    ->where('id_siswa', '=', $id)
                                    ->where('status', '=', 1)
                                    ->select('member.*', 'users.name','users.picture', 'kelas.*', "mata_kuliah.*")
                                    ->get();

      $histori = DB::table('member')->join('kelas', 'kelas.id_kelas', '=', 'member.id_kelas')
                                    ->join('mata_kuliah', 'mata_kuliah.id_matakuliah', '=', 'kelas.id_matakuliah')
                                    ->join('users', 'users.id', '=', 'member.id_tutor')
                                    ->where('id_siswa', '=', $id)
                                    ->where('status', '=', 3)
                                    ->select('member.*', 'users.*', 'kelas.*', "mata_kuliah.*")
                                    ->get();

      $pending_s = DB::table('member')->join('kelas', 'kelas.id_kelas', '=', 'member.id_kelas')
                                    ->join('mata_kuliah', 'mata_kuliah.id_matakuliah', '=', 'kelas.id_matakuliah')
                                    ->join('users', 'users.id', '=', 'member.id_siswa')
                                    ->where('member.id_tutor', '=', $id)
                                    ->where('status', '=', 1)
                                    ->select('member.*', 'users.name','users.picture', 'kelas.*', "mata_kuliah.*")
                                    ->get();


      $aktif_s = DB::table('member')->join('kelas', 'kelas.id_kelas', '=', 'member.id_kelas')
                                    ->join('mata_kuliah', 'mata_kuliah.id_matakuliah', '=', 'kelas.id_matakuliah')
                                    ->join('users', 'users.id', '=', 'member.id_siswa')
                                    ->where('member.id_tutor', '=', $id)
                                    ->where('status', '=', 2)
                                    ->select('member.*', 'users.name','users.picture', 'kelas.*', "mata_kuliah.*")
                                    ->get();

      $histori_s = DB::table('member')->join('kelas', 'kelas.id_kelas', '=', 'member.id_kelas')
                                    ->join('mata_kuliah', 'mata_kuliah.id_matakuliah', '=', 'kelas.id_matakuliah')
                                    ->join('users', 'users.id', '=', 'member.id_siswa')
                                    ->where('member.id_tutor', '=', $id)
                                    ->where('status', '=', 3)
                                    ->select('member.*', 'users.*', 'kelas.*', "mata_kuliah.*")
                                    ->get();

      return view('pages.userhome',compact('user', 'acc', 'pending', 'histori', 'pending_s', 'aktif_s', 'histori_s'));
    }

}
