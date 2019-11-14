<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClubInformation extends Model
{
    protected $fillable = [
        'location', 'bio', 'type', 'photo_id', 'club_id'
    ];


    public function club() {

        $this->belongsTo(Club::class, 'club_id','id');

    }
}
