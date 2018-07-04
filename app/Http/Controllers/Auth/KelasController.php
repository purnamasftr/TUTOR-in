<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Kelas;
use App\Member;

class KelasController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $user = Auth::user()->id;
      $kelas = DB::table('kelas')->join('mata_kuliah', 'kelas.id_matakuliah','=', 'mata_kuliah.id_matakuliah')
                                ->join('departemen', 'departemen.id_departemen', '=', 'mata_kuliah.id_departemen')
                                 ->select('kelas.*','mata_kuliah.nama_matkul', 'departemen.nama_departemen')
                                 ->where('kelas.id_tutor', $user)
                                 ->get();

      $fak = DB::table('fakultas')->pluck('nama_fakultas', 'id_fakultas');
      return view('kelas.index', compact('kelas'), compact('fak'));
    }

    public function store(Request $request)
     {
       request()->validate([
         'id_matakuliah' => 'required',
         'harga' => 'required',
       ]);

       Kelas::create($request->all());
       return redirect()->back();
     }
    public function edit($id_kelas)
    {
      $kelas = Kelas::find($id_kelas);
      // return view('kelas.edit')->withPost($kelas);
      return view('kelas.edit', compact('kelas'));
    }

    public function update(Request $kelas, $id_kelas)
    {
      request()->validate([
        'harga' => 'required',
    ]);
      Kelas::find($id_kelas)->update($kelas->all());
      return redirect()->route('kelas.index')->with('success','Profile updated successfully');
    }

    public function destroy($id_kelas)
    {
<<<<<<< HEAD
      if (Member::where('id_kelas',$id_kelas)->count()>0){
          Member::find($id_kelas)->delete();
      }
=======
      Member::find($id_kelas)->delete();
>>>>>>> 2ffbfe0ea9b094f202549a0c7a395c1017c2026c
      Kelas::find($id_kelas)->delete();
      return back();
    }
}
