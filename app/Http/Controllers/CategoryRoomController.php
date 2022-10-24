<?php

namespace App\Http\Controllers;

use App\Models\CategoryRoom;
use App\Http\Requests\StoreCategoryRoomRequest;
use App\Http\Requests\UpdateCategoryRoomRequest;

class CategoryRoomController extends Controller
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
     * @param  \App\Http\Requests\StoreCategoryRoomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRoomRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryRoom  $categoryRoom
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryRoom $categoryRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryRoom  $categoryRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryRoom $categoryRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRoomRequest  $request
     * @param  \App\Models\CategoryRoom  $categoryRoom
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRoomRequest $request, CategoryRoom $categoryRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryRoom  $categoryRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryRoom $categoryRoom)
    {
        //
    }
}
