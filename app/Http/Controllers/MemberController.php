<?php

namespace App\Http\Controllers;
use App\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
  public function store(Request $request)
  {
    request()->validate([
      'id_tutor' => 'required',
      'id_kelas' => 'required',
      'pesan' => 'required',
    ]);

    Member::create($request->all());
    return redirect()->back();
  }
  public function update(Request $request, $id)
  {
    request()->validate([
      'status' => 'required',
    ]);

    Member::find($id) -> update($request->all());
    return redirect()->back();
  }
}
