<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClubUser extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'user_id', 'club_id', 'is_active'
    ];



}
