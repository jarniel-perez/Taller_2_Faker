<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
  protected $table = 'jugadors';

  protected $fillable = [
    'nombre',
    'apellido',
    'equipo_id',
    'edad',
    'pais',
    'email',
    'telefono',
  ];

  protected $hidden = ['created_at','update_at'];

  public function equipo(){
    return $this->belongsTo('App\Equipo');
  }
}
