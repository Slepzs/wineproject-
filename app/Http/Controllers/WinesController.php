<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Wine;
use App\WineLocations;
use Illuminate\Http\Request;

class WinesController extends Controller
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
        return view('wines/index', compact('wines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wines/create');
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
        return redirect('wines/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $wine = Wine::with('winecategory', 'winelocations')->whereSlug($slug)->first();
        // return $wine;
        return view('wines/show', compact('wine'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wine = Wine::with('winecategory', 'winelocations')->findOrFail($id);
        // return $wine;
        return view('wines/edit', compact('wine'));
    }


    public function update(Request $request, $id)
    {
        $wine = Wine::findOrFail($id);

        $input = $request->all();

        $geodata = [
            'address_address' => $input['address_address'],
            'address_latitude' => $input['address_latitude'],
            'address_longitude' => $input['address_longitude'],
        ];

        $category = [
            'category_id' => $input['category_id']
        ];

        if($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $data['photo_id'] = $photo->id;
        }
        $wine->winelocations()->update($geodata);
        $wine->update($input);

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
