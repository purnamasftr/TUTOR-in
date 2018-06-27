<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Kelas;

class KelasController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //      return view('users.edit');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     //kelas Management
     public function tabel()
     {

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id_user_tutor)
    // {
    //   $post = Tutor::find($id_user_tutor);
    //   return view('tutor.show', compact('tutor'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kelas)
    {
      $kelas = Kelas::find($id_kelas);
      // return view('kelas.edit')->withPost($kelas);
      return view('kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $kelas, $id_kelas)
    {
      request()->validate([
        'harga' => 'required',
        'ket' => 'required',
    ]);
      Kelas::find($id_kelas)->update($kelas->all());
      return redirect()->route('kelas.index')->with('success','Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kelas)
    {
      Kelas::find($id_kelas)->delete();
      return back();
    }
}
