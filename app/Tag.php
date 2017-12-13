<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  /*
  * Relationship method
  */
  public function products()
  {
      return $this->belongsToMany('App\Product')->withTimestamps();
  }

  /*
  * Helper method to get an array of tag ids => tag names
  */
  public static function getForMultipleSelects()
  {
      $tags = Tag::orderBy('name')->get();

      $getForMultipleSelects = [];

      foreach ($tags as $tag) {
          $getForMultipleSelects[$tag['id']] = $tag->name;
      }

      return $getForMultipleSelects;
  }
}
