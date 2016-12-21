<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums';

    protected $fillable = [
                          'band_id', 
                           'name', 
                           'recorded_date', 
                           'release_date',
                           'number_of_tracks',
                           'label',
                           'producer',
                           'genre'
                           ];


    public function scopeSearch($query, $search)
    {
        return $query->where('band_id', 'LIKE', "%$search%");
    }                       

    /**
     * Album belongs to a band.
     *
     * @return relationship
     */
    public function band()
    {
        return $this->belongsTo('App\Band');
    }
}
