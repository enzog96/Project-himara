<?php

namespace App\Http\Controllers;

use App\Models\RoomOption;
use App\Http\Requests\StoreRoomOptionRequest;
use App\Http\Requests\UpdateRoomOptionRequest;

class RoomOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreRoomOptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoomOptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RoomOption  $roomOption
     * @return \Illuminate\Http\Response
     */
    public function show(RoomOption $roomOption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoomOption  $roomOption
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomOption $roomOption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoomOptionRequest  $request
     * @param  \App\Models\RoomOption  $roomOption
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoomOptionRequest $request, RoomOption $roomOption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoomOption  $roomOption
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomOption $roomOption)
    {
        //
    }
}
