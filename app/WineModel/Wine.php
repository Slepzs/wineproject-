<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => ['wine_name', 'vintage', 'grape']
            ]
        ];
    }

    protected $fillable = [
        'photo_id',
        'category_id',
        'user_id',
        'wine_location',
        'wine_name',
        'vintage',
        'producer',
        'grape',
        'alcohol_content',
        'wine_price',
        'location',
        'bottle_size',
        'lat',
        'lng',
        'slug'
    ];

    public function wineadditional()
    {
        return $this->hasOne('App\WineModel\WineAdditional', 'wine_id', 'id');
    }

    public function photo() {

        return $this->belongsTo('App\Photo');

    }

    public function winecategory() {

        return $this->belongsTo(WineCategory::class, 'category_id', 'id');

    }

    public function winelocations() {
        return $this->belongsTo(WineLocations::class, 'wine_location', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function winerating() {
        return $this->HasMany(WineRating::class, 'wine_id', 'id');
    }

}
