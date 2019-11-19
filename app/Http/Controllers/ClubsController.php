<?php

namespace App\Http\Controllers;

use App\club;
use App\ClubInformation;
use App\ClubUser;
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

        $club = club::create($input);

        ClubInformation::create(['club_id'=>$club->id]);


        return redirect('clubs/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $club = Club::findOrFail($id);
        $user = Auth::user()->id;
        $userapplied = ClubUser::where('user_id', $user)->get();
        //return $userapplied:
        return view('clubs/show', compact('club', 'userapplied') );

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
