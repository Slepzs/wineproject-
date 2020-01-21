<?php

namespace App\Http\Controllers;

use App\club;
use App\ClubInformation;
use App\ClubUser;
use App\ClubWine;
use App\Event;
use App\User;
use App\Wine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClubsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clubs = club::all();

        $club_amount = club::where('owner_id', Auth::user()->id)->count();


        //return $clubs;
        return view('clubs/index', compact('clubs', 'club_amount'));
    }

    public function search(Request $request)
    {
        if($request->has('search')){
            $clubs = club::search($request->get('search'))->get();
        }else{
            $clubs = club::get();
        }

        $club_amount = club::where('owner_id', Auth::user()->id)->count();
        return view('clubs/index', compact('clubs', 'club_amount'));
    }


    public function create() {

        return view('clubs/create');
    }



    public function store(Request $request)
    {


        $input = $request->all();

        $club = club::create($input)->id;

        $data = [
            'user_id' => $input['owner_id'],
            'club_id' => $club,
            'is_active' => 1,
            'role_id' => 1
         ];
        ClubUser::create($data);
        ClubInformation::create(['club_id'=>$club, 'type'=>$input['type'], 'location'=>$input['location']]);


        return redirect('clubs/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $club = Club::findBySlugOrFail($slug);
        $clubid = $club->id;
        $user = Auth::user()->id;
        $userapplied = ClubUser::where('user_id', $user)->where('club_id', $clubid)->get();

        $wines = Club::with('wine.winelocations', 'wine.winerating')->where('id', $clubid)->paginate(5);

        $allusers = $club->user()
            ->wherePivot('role_id', '<=', '3')
            ->get();

        $events = Event::where('club_id', $club->id)->get();


        return view('clubs/show', compact('club', 'userapplied', 'wines', 'allusers', 'events') );

    }

    public function myclubs() {

        $user = Auth::user()->id;
        $clubs = User::with('Club.clubInformation.Photo')->where('id', $user)->get();

        // return $clubs;
        return view('clubs.myclubs', compact('clubs'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function apply(Request $request)
    {
        $input = $request->all();

        $data = [
            'user_id' => Auth::user()->id,
            'club_id' => $input['club_id'],
            'is_active' => 0
        ];

        ClubUser::create($data);

        return back();
    }

    public function withdraw($id)
    {
        $user = Auth::user();
        $input = Club::findOrFail($id);
        $input->user()->where('user_id', $user)->wherePivot('club_id', $id)->detach($user);
        return back();
    }

    public function lock(Request $request, $lock) {

        $input = $request->all();

        $wine = Wine::findOrFail($lock)->id;

        $locked = ClubWine::where('wine_id', $wine)->where('club_id', $input['club_id'])->first();

        if($locked->locked == 1) {
            $unlock = ClubWine::where('wine_id', $wine)->where('club_id', $input['club_id']);
            $unlock->update(['locked' => 0]);
        } else {
            $locked = ClubWine::where('wine_id', $wine)->where('club_id', $input['club_id']);
            $locked->update(['locked' => 1]);
        }

        return back();

    }







}
