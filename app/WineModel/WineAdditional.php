<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WineAdditional extends Model
{
    protected $fillable = [
        'wineid',
        'wine_style',
        'food_suggestion',
        'awards',
        'notes'
    ];


}
