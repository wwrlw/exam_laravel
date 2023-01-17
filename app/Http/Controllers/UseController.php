<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Thing;
use App\Models\Use_table;
use App\Models\User;
use Illuminate\Http\Request;

class UseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uses = Use_table::all();

        return view('use.index', compact('uses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $things = Thing::all();
        $places = Place::all();
        $users = User::all();

        return view('use.create', compact('things', 'places', 'users'));
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
            'user_id' => 'required',
            'place_id' => 'required',
            'thing_id' => 'required',
            'amount' => 'required'
        ]);

        $use = new Use_table();
        $use->user_id = request('user_id');
        $use->place_id = request('place_id');
        $use->thing_id = request('thing_id');
        $use->amount = request('amount');

        $use->save();

        return redirect()->route('uses.index')->with('success','Use created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Use_table $use)
    {
        return view('use.show',compact('use'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Use_table $use)
    {
        $things = Thing::all();
        $places = Place::all();
        $users = User::all();

        return view('use.edit',compact('use', 'things', 'places', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Use_table $use)
    {
        $request->validate([
            'user_id' => 'required',
            'place_id' => 'required',
            'thing_id' => 'required',
            'amount' => 'required'
        ]);

        $use->update($request->all());

        return redirect()->route('uses.index')->with('success','Use updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Use_table $use)
    {
        $use->delete();

       return redirect()->route('uses.index')
                       ->with('success','Use deleted successfully');
    }
}
