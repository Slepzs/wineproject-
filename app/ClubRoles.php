<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClubRoles extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name'
    ];

}
