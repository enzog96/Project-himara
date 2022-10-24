<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\CategoryGallery;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class GalleryAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerycat = CategoryGallery::all();

        $gallery = Gallery::all();

        return view('backoffice.home.gallery', compact('gallerycat', 'gallery'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * @param  \App\Models\Gallery  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $id)
    {
        //Members
        $gallery = $id;
        $gallery->category_gallery_id = $request->category_gallery_id;
        $gallery->title = $request->title;
        Storage::put('public/assets/', $request->file('image'));
        
        $newimage = $request->file('image')->hashName();
        $image_path = public_path('storage/assets/' . $newimage);
        Image::make($image_path)->resize(219, 219)->save(public_path('images/gallery/'  . $newimage));

        $gallery->image = $newimage;
        $gallery->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $gallery = Gallery::all();

        foreach ($gallery as $image) {
            if ($image->id == $request->title) {
                $image->delete();
                return redirect()->back();
            }
        }
    }
}
