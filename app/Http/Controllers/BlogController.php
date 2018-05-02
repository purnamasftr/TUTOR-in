<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog/home');
    }

    public function show($id)
    {
        $nilai = 'ini nih linknya' . $id;
        $users = ['mela', 'dita', 'pipit', 'riska'];
        $unescaped = '<script> alert("kamu keren") </script>';

        return view('blog/single',['blog' => $nilai, 'users' => $users, 'unescaped' => $unescaped]);
    }

}
