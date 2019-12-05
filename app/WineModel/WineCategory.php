<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;
use Laravel\Scout\Searchable;

class WineCategory extends Model
{
    use Searchable;

    public $timestamps = false;
    protected $fillable = [

        'name'

    ];

    public function searchableAs()
    {
        return 'wine_categories';
    }





}
