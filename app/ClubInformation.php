<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClubInformation extends Model
{
    protected $fillable = [
        'location', 'bio', 'type', 'photo_id', 'club_id'
    ];

    public function club() {
        $this->belongsTo('App\Club', 'club_id','id');
    }

    public function photo() {

        return $this->belongsTo('App\Photo');

    }

}
