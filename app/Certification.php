<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
  /*
  * Relationship method
  */
  public function products()
  {
      return $this->belongsToMany('App\Product')->withTimestamps();
  }
}
