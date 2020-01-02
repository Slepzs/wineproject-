<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;
use Laravel\Scout\Searchable;

class WineCategory extends Model
{
    use Searchable;

    use Sluggable;
    use SluggableScopeHelpers;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => ['name',]
            ]
        ];
    }

    public $timestamps = false;
    protected $fillable = [

        'name'

    ];

    public function searchableAs()
    {
        return 'wine_categories';
    }





}
