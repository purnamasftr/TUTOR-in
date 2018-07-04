<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;
use App\Crud;

class CariController extends Controller
{

    public function CariTutor()
    {
        $fak = DB::table('fakultas')->pluck('nama_fakultas', 'id_fakultas');

        return view('pages.cari-tutor', compact('fak'));
    }
    public function search(Request $request)
    {
        $query = $request->get('q');
        $kelas_tutor = DB::table('kelas')->join('users', 'users.id', '=', 'kelas.id_tutor')
                                        ->where('id_matakuliah', 'LIKE', '%' . $query . '%')->paginate(6);
        $hasil = User::where('name', 'LIKE', '%' . $query . '%')->paginate(6);




        return view('pages.hasil-cari', compact('kelas_tutor', 'query'));
    }
}
