<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
  protected $fillable = [
    'nome',
    'sesso',
    'anni',
  ];

  public function albums() {
    return $this->belongsToMany('App\Album');
  }
}
