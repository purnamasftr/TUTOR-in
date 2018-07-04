<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutor;

class SignupTutorController extends Controller
{

  public function store(Request $request)
  {
    request()->validate([
      'nama_tutor' => 'required',
      'email_tutor' => 'required',
      'password_tutor' => 'required',
    ]);
    Tutor::create($request->all());
    return redirect()->route('tutor.index')->with('success','Tutor telah bertambah');
  }
}
