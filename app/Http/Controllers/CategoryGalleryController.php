<?php

namespace App\Http\Controllers;

use App\Models\CategoryGallery;
use App\Http\Requests\StoreCategoryGalleryRequest;
use App\Http\Requests\UpdateCategoryGalleryRequest;

class CategoryGalleryController extends Controller
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
     * @param  \App\Http\Requests\StoreCategoryGalleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryGalleryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryGallery  $categoryGallery
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryGallery $categoryGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryGallery  $categoryGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryGallery $categoryGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryGalleryRequest  $request
     * @param  \App\Models\CategoryGallery  $categoryGallery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryGalleryRequest $request, CategoryGallery $categoryGallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryGallery  $categoryGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryGallery $categoryGallery)
    {
        //
    }
}
