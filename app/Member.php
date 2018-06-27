<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    protected $table = 'member';
    protected $primaryKey = 'id_member';
    protected $fillable = ['id_kelas', 'id_siswa', 'id_tutor', 'pesan', 'status'];
}
