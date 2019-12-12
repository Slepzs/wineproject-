<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Support\Facades\Auth;
use Laravel\Scout\Searchable;

class club extends Model
{
    use Searchable;
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



    public function getAverageClubRating($wine_id) {
        $average = $this->winerating->where('wine_id', $wine_id)->avg('rating');
        return $average;
    }

    public function GetMember($club_id) {

        $userid = Auth::user()->id;

        $member = ClubUser::where('club_id', $club_id)->where('user_id', $userid)->first();

        return $member;

    }

    public function StartWineRating($club_id) {

        $userid = Auth::user()->id;

        $member = ClubUser::where('club_id', $club_id)->where('user_id', $userid)->where('role_id', '<', '2')->first();

        return $member;

    }

    public function EditUsers($club_id) {

        $userid = Auth::user()->id;

        $member = ClubUser::where('club_id', $club_id)->where('user_id', $userid)->where('role_id', '=', '1')->first();

        return $member;

    }

    public function Owner($club_id) {

        $userid = Auth::user()->id;

        $admin = Club::where('id', $club_id)->where('owner_id', $userid)->first();

        return $admin;
    }





}
