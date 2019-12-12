<?php

namespace App\Http\Controllers;

use App\club;
use App\ClubInformation;
use App\ClubUser;
use App\Photo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClubManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid = Auth::user()->id;

        $clubs = club::with('user')->where('owner_id', $userid)->get();

        return view('clubManagement/index', compact('clubs'));

    }

    public function users($users) {

        $clubs = Club::with('user')->where('id', $users)->get();

        return view('clubManagement/users', compact('clubs'));
    }

    public function active($active) {

        $clubusers = ClubUser::findOrFail($active);

        $clubusers->update(['is_active' => 1, 'role_id' => 3]);

        return back();

    }

    public function remove($active) {

        $clubusers = ClubUser::findOrFail($active);

        $clubusers->update(['is_active' => 0, 'role_id' => 4]);

        return back();
    }


    public function deleteclub($id) {

        Club::find($id)->delete();

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $club = Club::findOrFail($id);

        return view('clubManagement/edit', compact('club'));
    }


    public function update(Request $request, $id)
    {
        $input = $request->all();

        $club = club::findOrFail($id);

        $data = [
            'location' => $input['location'],
            'type' => $input['type'],
            'bio' => $input['bio'],
        ];
        if($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $data['photo_id'] = $photo->id;
        }

        $club->update($input);
        $club->clubInformation()->update($data);

        return back();
    }

    public function role(Request $request, $id) {

        $input = $request->all();
        $clubusers = ClubUser::where('user_id', $id);
        $promoted = $clubusers->update(['role_id' => $input['role_id']]);
        return back();

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
}
