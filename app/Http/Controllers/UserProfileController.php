<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserProfile;
use App\Photo;
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


    public function update(UpdateUserProfile $request, $id)
    {

        $user = Auth::user()->findOrFail($id);

        if(trim($request->password) == '') {

            $input = $request->except('passsword');

        } else {

            $input = $request->validated();

            $input['password'] = bcrypt($request->password);

        }

        if($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;

        }

        $user->update($input);

        $errors = $input->errors();


        session_messages('Profile updated', 'uk-alert-success');

        return redirect('profile/', compact('errors'));
    }

}
