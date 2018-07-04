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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $user = DB::table('users')->join('fakultas', 'fakultas.id_fakultas','=', 'users.fakultas')
                                   ->select('users.*','fakultas.nama_fakultas')
                                   ->where('users.id', $id)
                                   ->get();


        return view('users.index', compact('user'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit()
     {
         $user = Auth::user();
         $fak = DB::table('fakultas')->pluck('nama_fakultas', 'id_fakultas');
         return view('users.edit-profil', compact('user'), compact('fak'));
     }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

         $user->save();
         return redirect()->route('users.edit-profil')->with('success','Profile updated successfully');
     }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getDept($id)
    {
      $dept = DB::table('departemen')->where('id_fakultas',$id)->pluck("nama_departemen", 'id_departemen');
      return json_encode($dept);
    }
    public function read(User $user)
    {
      $user = Auth::user();
      $tut = DB::table('tutor')->pluck('nama_tutor', 'id_user_tutor');

      return view('users.read', compact('user'));
    }
    public function UserHome($id)
    {
      $user = User::whereId($id)->first();
      return view('pages.user-home', compact('user'));
    }
    public function ProfilTutor($id)
    {
      $user = User::whereId($id)->first();
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
    public function EditKelas()
    {
        return view('kelas.edit-kelas');
    }
    public function EditProfil()
    {
        return view('users.edit-profil');
    }
    public function UbahSandi()
    {
        return view('users.ubah-sandi');
    }
    //kelas Management
    public function tabel()
    {
        $user = Auth::user();
        $kelas = DB::table('kelas')->select('id_kelas', 'id_matakuliah', 'harga')->get();
        $fak = DB::table('fakultas')->pluck('nama_fakultas', 'id_fakultas');
        return view('users.kelas', compact('kelas'), compact('fak'));
    }

    public function store(Request $request)
    {
      request()->validate([
        'id_tutor' => 'required',
        'id_matakuliah' => 'required',
        'harga' => 'required',
      ]);
      Kelas::create($request->all());
      return redirect()->route('users.index');
    }
}
