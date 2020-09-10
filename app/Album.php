<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
      'titolo',
      'artista',
      'anno',
    ];

    public function songs() {
      return $this->hasMany('App\Song');
    }
    public function covers() {
      return $this->hasOne('App\Cover');
    }
    public function artists() {
      return $this->belongsToMany('App\Artist');
    }
}
