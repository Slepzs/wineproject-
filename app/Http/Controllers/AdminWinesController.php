<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Wine;
use App\WineLocations;
use Illuminate\Http\Request;

class AdminWinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $wines = Wine::with('winecategory', 'winelocations')->get();

       // return $wines;
        return view('admin/wines/index', compact('wines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/wines/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $wine = new Wine();
        $input = $request->all();

        if($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;

        }
        $data = [
            'address_address' => $input['address_address'],
            'address_latitude' => $input['address_latitude'],
            'address_longitude' => $input['address_longitude']
        ];

        $input['wine_location'] = WineLocations::create($data)->id;

        $wine->create($input);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wine = Wine::findOrFail($id)->with('winecategory', 'winelocations')->first();

        return view('admin/wines/show', compact('wine'));

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
}
