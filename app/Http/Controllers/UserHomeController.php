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
    public function showChangePasswordForm(){
        return view('users.ubah-sandi');
    }

    public function changePassword(Request $request){

        if (!(Hash::check($request->get('current-password'),  Auth::user()->password ))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");

    }



}
