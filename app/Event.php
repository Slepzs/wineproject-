<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Laravel\Scout\Searchable;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    use Sluggable;
    use SluggableScopeHelpers;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => ['title']
            ]
        ];
    }

    protected $fillable = [

        'title', 'description', 'price', 'location', 'date', 'club_id', 'photo_id', 'public', 'slug'

    ];

    public function photo() {

        return $this->belongsTo(Photo::Class, 'photo_id');

    }

    public function club() {

        return $this->belongsTo(club::Class, 'club_id');

    }

    public function EventSignUp() {

        return $this->hasMany( EventSignUp::Class, 'event_id', 'id');

    }

}
