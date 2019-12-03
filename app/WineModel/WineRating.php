<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WineRating extends Model
{
    protected $fillable = [
        'wine_id', 'club_id', 'user_id', 'rating'
    ];


    public function user() {
        return $this->belongsTo(User::Class, 'user_id');
    }

    public function club() {
        return $this->belongsTo(club::Class, 'club_id');
    }

    public function wine() {
        return $this->belongsTo(Wine::class, 'wine_id');
    }


}
