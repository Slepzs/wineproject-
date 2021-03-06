<?php

namespace App;


use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use App\Role;

class User extends Authenticatable
{
    use Sluggable;
    use SluggableScopeHelpers;

    use Notifiable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */

    // https://github.com/cviebrock/eloquent-sluggable
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'email', 'password', 'role_id', 'is_active', 'photo_id', 'bio', 'nickname', 'photo_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function role() {

        return $this->belongsTo('App\Role', 'role_id', 'id');

    }


    public function photo() {

        return $this->belongsTo('App\Photo');

    }

    public function club() {
        return $this->belongsToMany(Club::class, 'club_users')->withPivot('id', 'is_active', 'role_id');
    }

    public function wine() {
        return $this->hasMany(Wine::class, 'user_id', 'id');
    }


    public function winerating() {
        return $this->hasMany(WineRating::class, 'user_id', 'id');
    }




    public function CheckAdmin(){

        if($this->role->name == 'administrator' && $this->is_active == 1){
            return true;
        }
        return false;
    }

    public function check()
    {
        return ! is_null($this->user());
    }

    public function GetRole($user_id, $club_id) {

        $role = ClubUser::where('user_id', $user_id)->where('club_id', $club_id)->first()->role_id;

        switch ($role) {
            case 1:
                return "Administrator";
                break;
            case 2:
                return "Creator";
                break;
            case 3:
                return "Taster";
                break;
            default:
                return "Null";
                break;
        }
    }




}
