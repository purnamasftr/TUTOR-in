<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function profil()
     {
       $user=User::where('id', 2)->first();
       return view('profil-tutor', compact('user'));
     }

      public function index()
      {
        $tutor = DB::table('users')->where('type', 2)->get();
        return view('tutor.index', compact('tutor'))->with('i',(request()->input('page',1) -1) *5);
      }

       public function tutorTable()
       {
            $tutor = DB::table('users')->where('type', 2)->get();
            return view('tutor.index', compact('tutor'))->with('i',(request()->input('page',1) -1) *5);
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('tutor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // request()->validate([
      //   'nama_tutor' => 'required',
      //   'email_tutor' => 'required',
      //   'password_tutor' => 'required',
      //   'alamat_tutor' => 'required',
      //   'fakultas_tutor' => 'required',
      //   'jurusan_tutor' => 'required',
      // ]);
      // Tutor::create($request->all());
      // return redirect()->route('tutor.index')->with('success','Tutor telah bertambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_user_tutor)
    {
      // $post = Tutor::find($id_user_tutor);
      // return view('tutor.show', compact('tutor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_user_tutor)
    {
      // $post = Tutor::find($id_user_tutor);
      // return view('tutor.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_user_tutor)
    {
    //   request()->validate([
    //     'nama_tutor' => 'required',
    //     'email_tutor' => 'required',
    //     'password_tutor' => 'required',
    //     'alamat_tutor' => 'required',
    //     'fakultas_tutor' => 'required',
    //     'jurusan_tutor' => 'required',
    // ]);
    //   Tutor::find($id_user_tutor)->update($request->all());
    //   return redirect()->route('tutor.index')->with('success','Tutor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_user_tutor)
    {
      // Tutor::find($id_user_tutor)->delete();
      // return redirect()->route('tutor.index')->with('success','Tutor deleted successfully');
    }
}
