<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';

    protected $fillable = [
      'nombre',
      'pais',
      'color',
      'email',
      'telefono',
    ];

    protected $hidden = ['created_at','update_at'];

    public function jugadors(){
      return $this->hasMany('App\Jugador');
    }
}
