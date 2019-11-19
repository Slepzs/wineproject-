<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

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

        return $this->belongsToMany(Club::class, 'club_users')->withPivot('id', 'is_active');

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




}
