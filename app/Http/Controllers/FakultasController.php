<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Support\Facades\DB;

use Auth;
use App\User;
use Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class FakultasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
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
