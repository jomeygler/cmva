<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\evento;
class tipoevento extends Model
{
  public function eventos (){
  //  return $this->hasMany(evento::class);
  return $this->hasMany('App\evento','tipoevento_id');
  }
    //
}
