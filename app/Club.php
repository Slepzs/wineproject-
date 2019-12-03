<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class club extends Model
{
    protected $fillable = [
        'name', 'information_id', 'owner_id'
    ];


    public function user() {

       return $this->belongsToMany(User::class, 'club_users')->withPivot('id', 'is_active', 'role_id');

    }

    public function clubinformation()
    {
        return $this->hasOne('App\ClubInformation', 'club_id', 'id');
    }


    public function winerating() {
        return $this->hasMany(WineRating::class, 'club_id', 'id');
    }




}
