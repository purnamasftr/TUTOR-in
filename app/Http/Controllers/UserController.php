<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Item;

class UserController extends Controller
{
    public function UserHome()
    {
        return view('pages.user-home');
    }
    public function ProfilTutor()
    {
        return view('pages.profil-tutor');
    }
    public function CariTutor()
    {
        return view('pages.cari-tutor');
    }
}
