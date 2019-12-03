<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{

    protected $fillable = [
        'photo_id',
        'category_id',
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
        'lng'
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

}
