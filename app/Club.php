<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class club extends Model
{
    protected $fillable = [
        'name', 'information_id', 'owner_id'
    ];


    public function user() {

        $this->belongsToMany(User::class, 'club_users');

    }

    public function clubinformation()
    {
        return $this->hasOne('App\ClubInformation', 'club_id', 'id');
    }




}
