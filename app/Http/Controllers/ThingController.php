<?php

namespace App\Http\Controllers;

use App\Models\Thing;
use Illuminate\Http\Request;

class ThingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $things = Thing::all();

        return view('thing.index', compact('things'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('thing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'wrnt' => 'required',
            'master' => 'required'
        ]);

        $place = new Thing();
        $place->name = request('name');
        $place->description = request('description');
        $place->wrnt = request('wrnt');
        $place->master = request('master');

        $place->save();

        return redirect()->route('things.index')->with('success','Thing created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Thing $thing)
    {
        return view('thing.show',compact('thing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Thing $thing)
    {
        return view('thing.edit',compact('thing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thing $thing)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'wrnt' => 'required',
            'master' => 'required'
        ]);

        $thing->update($request->all());

        return redirect()->route('things.index')->with('success','Thing updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thing $thing)
    {
        $thing->delete();

       return redirect()->route('things.index')
                       ->with('success','Thing deleted successfully');
    }
}
