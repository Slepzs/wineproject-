<?php

namespace App\Http\Controllers;

use App\club;
use App\ClubInformation;
use App\ClubUser;
use App\ClubWine;
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

        //return $clubs;
        return view('clubs/index', compact('clubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clubs/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        $wines = Club::with('wine.winelocations')->where('id', $clubid)->get();


        //return $wines;
        return view('clubs/show', compact('club', 'userapplied', 'wines') );

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





}
