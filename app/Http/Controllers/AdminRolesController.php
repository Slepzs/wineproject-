<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminRolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();

        $roles = Role::all();

        return view('admin.roles.index', compact('user', 'roles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $role = new Role();
    $input = $request->all();

    $role->create($input);

        Session::flash('flash_message', 'Well done!, You successfully created a role.');
        Session::flash('flash_type', 'uk-alert-success');

    return redirect('admin/roles/');


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
    public function edit($role)
    {

        $roles = Role::findOrFail($role);

        return view('admin.roles.edit', compact('roles'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $role)
    {
        $input = Role::findOrFail($role);

        $input->update($request->all());

        session_messages('You have successfully updated this role', 'uk-alert-success');

        return redirect('admin/roles/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($role)
    {

        Role::findOrFail($role)->delete();

        session_messages('Well Done, You have deleted successfully', 'uk-button-danger');

        return redirect('/admin/roles/');

    }
}
