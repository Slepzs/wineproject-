<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class club extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }



    protected $fillable = [
        'name', 'information_id', 'owner_id', 'slug'
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

    public function wine() {
        return $this->belongsToMany(Wine::class, 'club_wines')->withPivot('id');
    }




}
