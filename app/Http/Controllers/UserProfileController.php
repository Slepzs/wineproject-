<?php

namespace App\Http\Controllers;

use App\Http\Requests\updatePassword;
use App\Http\Requests\UpdateUserProfile;
use App\Photo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();

        return view('profile/index', compact('user'));

    }


    public function update(Request $request, $id)
    {

        $user = Auth::user()->findOrFail($id);

        if(trim($request->password) == '') {


            $input = $request->except('password');



        } else {


            $input = $request->all();

            $input['password'] = bcrypt($request->password);

        }

        if($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;

        }

        $user->update($input);

        session_messages('Profile updated', 'uk-alert-success');

        return redirect('profile/');
    }


    public function show($id) {

        $user = User::findOrFail($id);

        return view('profile/show', compact('user'));

    }

    public function passwordupdate() {

        $user = Auth::user();

        return view('profile.password_update', compact('user'));
    }


    public function password(UpdatePassword $request, $id) {

        $user = Auth::user()->findOrFail($id);

        $input = $request->all();

        $input['password'] = bcrypt($request->password);

        $user->update($input);

        session_messages('Password updated', 'uk-alert-success');

        return redirect('profile/');
    }

}
