<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    public function index()
    {
      return view('blog/blog');
    }

    public function show($id)
    {
      $nilai = 'ini adalah linknya '. $id;
      $user = 'purnama syafitri manurung';
      $users = ['pipit','dita','riska','mela'];
      return view('blog/single', ['blog' => $nilai, 'user' => $user, 'users' => $users]);
    }
}
