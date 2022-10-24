<?php

namespace App\Http\Controllers;

use App\Models\Bookingform;
use App\Http\Requests\StoreBookingformRequest;
use App\Http\Requests\UpdateBookingformRequest;

class BookingformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.booking-form');
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
     * @param  \App\Http\Requests\StoreBookingformRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookingformRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bookingform  $bookingform
     * @return \Illuminate\Http\Response
     */
    public function show(Bookingform $bookingform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bookingform  $bookingform
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookingform $bookingform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookingformRequest  $request
     * @param  \App\Models\Bookingform  $bookingform
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookingformRequest $request, Bookingform $bookingform)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bookingform  $bookingform
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookingform $bookingform)
    {
        //
    }
}
