<?php

namespace App\Http\Controllers;

use App\club;
use App\ClubWine;
use App\Wine;
use App\WineRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

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

    public function rate($slug, $club) {
        $wine = Wine::findBySlugOrFail($slug);

        $wine_id = $wine->id;
        $club_id = $club;
        $user_id = Auth::user()->id;

        $rating = DB::table('wine_ratings')->where('wine_id', $wine_id)->where('club_id', $club_id)->where('user_id', $user_id)->value('rating');

        return view('ratings.rate', compact('wine', 'club', 'rating'));
    }

    public function rated(Request $request, $wine) {

        $rating = WineRating::where('wine_id', $wine)->where('club_id', $request->club_id)->where('user_id', $request->user_id)->first();
        $data = [
            'wine_id' => $wine,
            'club_id' => $request->club_id,
            'user_id' => $request->user_id,
            'rating' => $request->rating,
        ];

        if($rating) {
            $winerating = $rating->update($data);
        } else {
            $winerating = WineRating::create($data);
        }

        return Response::json(array(
            'success' => true,
            'data'   => $winerating
        ));


    }




}
