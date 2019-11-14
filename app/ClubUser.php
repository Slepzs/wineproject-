<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClubUser extends Model
{
    protected $fillable = [
        'user_id', 'club_id'
    ];

}
