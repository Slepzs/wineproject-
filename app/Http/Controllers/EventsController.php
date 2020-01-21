<?php

namespace App\Http\Controllers;

use App\club;
use App\ClubUser;
use App\ClubWine;
use App\Event;
use App\EventSignUp;
use App\Photo;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventsController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {



    }

    public function events()
    {
        if(!Auth::user()) {
            $publicEvents = Event::where('public', '0')->get();
            return view('events', compact('publicEvents'));
        } else {

            $clubs = ClubUser::where('user_id', Auth::user()->id)->get();

            $events = new Collection([]);
            foreach($clubs as $club) {

                $userEvents = Event::where('club_id', $club->id)->get();
                $events->push($userEvents);

            }
            return view('events', compact('events'));



        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $club = club::findBySlugOrFail($request->slug);

        return view('events/create', compact('club'));
    }

    public function registration($slug) {

        $club = Club::findBySlugOrFail($slug)->id;

        $events = Event::with('EventSignUp')->where('club_id', $club)->get();

        //return $events;
        return view('events/registration', compact('events'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $event = new Event();
        $input = $request->all();

        if($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;

        }


        $event->create($input);

        return redirect('clubs');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $event = Event::findBySlugOrFail($slug);

        if(Auth::user()) {
            $signedUp = EventSignUp::where('user_id', Auth::user()->id)->first();
            return view('event-post', compact('event', 'signedUp'));
        } else {
            return view('event-post', compact('event'));
        }



    }

    public function remove($id) {


        $user = Auth::user()->id;

        $event = EventSignUp::where('event_id', $id)->where('user_id', $user)->first();

        $event->delete($event);
        return back();

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

    public function join(Request $request) {

        $signup = new EventSignUp();

        $data = $request->all();

        $signup->create($data);

        return back();

    }

}
