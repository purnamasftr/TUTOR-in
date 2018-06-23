<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function myfak()
    {

      $fak = DB::table('fakultas')->pluck('nama_fakultas', 'id_fakultas');
      return view('myFak',compact('fak'));

    }
    public function getDept($id)
    {
      $dept = DB::table('departemen')->where('id_fakultas',$id)->pluck("nama_departemen", 'id_departemen');
      return json_encode($dept);
    }

    public function getMatkul($id)
    {
      $matkul = DB::table('mata_kuliah')->where('id_departemen',$id)->pluck("nama_matkul", 'id_matakuliah');
      return json_encode($matkul);
    }
}
