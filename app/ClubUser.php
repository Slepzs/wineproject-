<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClubUser extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'user_id', 'club_id', 'is_active', 'role_id'
    ];



    public function role() {

        return $this->belongsTo('App\ClubRoles', 'role_id', 'id');

    }



}
