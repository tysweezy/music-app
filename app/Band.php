<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    protected $table = 'bands';

    protected $fillable = ['name', 'start_date', 'website', 'still_active'];

    /**
     * A band can have many albums
     *
     * @return relationship
     */
     public function albums()
     {
         return $this->hasMany('App\Album');
     }
}
