<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\funcionario;
use App\tipoevento;
class evento extends Model
{
  public function funcionario (){
    //return $this->hasMany(EventoFu::class);
    return $this->belongsTo(funcionario::class);
    //    return $this->belongsTo('App\funcionario', 'id');
}
public function tipoevento (){
//  return $this->hasMany(evento::class);
return $this->belongsTo(tipoevento::class);
}
}
