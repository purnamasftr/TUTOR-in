<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    protected $fillable = ['id_tutor', 'id_matakuliah', 'harga'];

    public function user()
   {
       return $this->belongsTo('App\User');
   }


}
