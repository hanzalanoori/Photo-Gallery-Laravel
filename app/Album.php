<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'name', 'album_desc', 'cover_image'
    ];

    public function photos(){

        return $this->hasMany('App\Photo');
    }

}
