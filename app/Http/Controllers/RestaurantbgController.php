<?php

namespace App\Http\Controllers;

use App\Models\Restaurantbg;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreRestaurantbgRequest;
use App\Http\Requests\UpdateRestaurantbgRequest;

class RestaurantbgController extends Controller
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
     * @param  \App\Http\Requests\StoreRestaurantbgRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestaurantbgRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurantbg  $restaurantbg
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurantbg $restaurantbg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurantbg  $restaurantbg
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurantbg $restaurantbg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRestaurantbgRequest  $request
     * @param  \App\Models\Restaurantbg  $restaurantbg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurantbg $id)
    {
        //Restaurant
        $restaurantbgs = Restaurantbg::first();
        Storage::put('public/assets/', $request->file('bg'));
        
        $newimage = $request->file('bg')->hashName();
        $image_path = public_path('storage/assets/' . $newimage);
        Image::make($image_path)->resize(1170, 750)->save(public_path('images/'  . $newimage));

        $restaurantbgs->bg = $newimage;
        $restaurantbgs->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurantbg  $restaurantbg
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurantbg $restaurantbg)
    {
        //
    }
}
