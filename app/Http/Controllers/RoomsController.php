<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\Review;
use App\Models\Contact;
use App\Models\Roomtag;
use App\Models\CategoryRoom;
use App\Http\Requests\StoreRoomsRequest;
use App\Http\Requests\UpdateRoomsRequest;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $contacts = Contact::all();

        $rooms = Rooms::all();

        $roomcate = CategoryRoom::all();

        $tags = Roomtag::all();

        $reviews = Review::take(3)->get();

        return view('pages.rooms-list', compact('contacts', 'rooms', 'roomcate', 'tags'));
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
     * @param  \App\Http\Requests\StoreRoomsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoomsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function show(Rooms $rooms, $id)
    {
        
        $contacts = Contact::all();

        $room = Rooms::find($id);

        $rooms = Rooms::take(3)->get();

        $roomcate = CategoryRoom::all();

        $tags = Roomtag::all();

        $reviews = Review::take(3)->get();

        return view('pages.room-show', compact('contacts','rooms', 'room', 'roomcate', 'tags', 'reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function edit(Rooms $rooms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoomsRequest  $request
     * @param  \App\Models\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoomsRequest $request, Rooms $rooms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rooms $rooms)
    {
        //
    }
}
