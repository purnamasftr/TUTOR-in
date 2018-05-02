<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Tutor extends Authenticatable
{
    protected $table = 'tutor';
    protected $fillable = ['nama_tutor', 'email_tutor', 'password_tutor', 'alamat_tutor', 'fakultas_tutor', 'jurusan_tutor'];
    protected $primaryKey = 'id_user_tutor';
}
