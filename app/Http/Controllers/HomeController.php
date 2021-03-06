<?php

namespace App\Http\Controllers;

use App\Wine;
use App\WineCategory;
use App\WineRating;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct(){$this->middleware('auth');}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // https://stackoverflow.com/questions/44894294/laravel-eloquent-get-most-common-value-in-a-database-column
    public function index()
    {
        $user = Auth::User();

        $most_rated_wine = DB::table('wine_ratings')
            ->select('wine_id')
            ->groupBy('wine_id')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(1)->get();

        $categories = WineCategory::all();

        // https://stackoverflow.com/questions/20563166/eloquent-collection-counting-and-detect-empty
        if ($most_rated_wine->isEmpty()) {
            return view('/index', compact('user', 'categories'));
        }


        foreach($most_rated_wine as $wine) {
           $id =  $wine->wine_id;
        }

        $wines = Wine::with('winecategory', 'winelocations')->where('id', $id)->get();


        return view('/index', compact('user', 'wines', 'categories'));
    }

    public function admin() {

        return view('admin/index');

    }
}
