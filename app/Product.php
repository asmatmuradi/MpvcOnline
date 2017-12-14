<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /*
    * Relationship method
    */
    public function tags()
    {
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
    /*
    * Relationship method
    */
    public function certifications()
    {
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\Certification')->withTimestamps();
    }
}
