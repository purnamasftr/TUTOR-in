<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $primaryKey = 'id_member';
    protected $fillable = ['id_kelas', 'id_siswa', 'id_tutor', 'pesan', 'status'];

    public function user()
   {
       return $this->belongsTo('App\User');
   }
}
