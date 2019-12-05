<?php

namespace App\Http\Controllers;

use App\Wine;
use Illuminate\Http\Request;

class WinesRatingController extends Controller
{


    public function index()
    {

        $wines = Wine::with('winecategory', 'winelocations')->get();

        // return $wines;
        return view('ratings/choose', compact('wines'));
    }


}
