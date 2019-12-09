<?php

namespace App\Http\Controllers;

use App\club;
use App\ClubWine;
use App\Wine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WinesRatingController extends Controller
{


    public function index()
    {

        $wines = Wine::with('winecategory', 'winelocations')->get();

        // return $wines;
        return view('ratings/choose', compact('wines'));
    }


    public function confirmrating($slug) {

        $wine = Wine::findBySlugOrFail($slug);

        $user = Auth::user()->id;
        $clubs = Club::with('clubInformation')->where('owner_id', $user)->get();

        //return $clubs;
         return view('ratings/confirm-rating', compact('wine', 'clubs'));
    }

    public function confirmclub(Request $request) {

        $input = $request->all();

        ClubWine::create($input);

        $getslug = club::findOrFail($input['club_id'])->slug;

        $url = 'clubs/' . $getslug;

        return redirect($url);

    }

    public function rate($slug) {
        $wine = Wine::findBySlugOrFail($slug);

        return view('ratings.rate', compact('wine'));
    }




}
