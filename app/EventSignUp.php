<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventSignUp extends Model
{
    protected $fillable = [

        'event_id', 'name', 'email', 'description', 'guests', 'accepted', 'user_id'

    ];

    public function event() {

        return $this->belongsTo(Event::Class, 'event_id', 'id');

    }

}
