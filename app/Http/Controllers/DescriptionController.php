<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\Rooms;
use App\Models\Video;
use App\Models\Review;
use App\Models\Slider;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Restaurant;
use App\Models\Description;
use App\Models\CategoryRoom;
use App\Models\Restaurantbg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreDescriptionRequest;
use App\Http\Requests\UpdateDescriptionRequest;

class DescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();

        $descriptions = Description::first();

        $rooms = Rooms::take(3)->get();

        $services = Service::all();

        $gallery = Gallery::take(8)->get();

        $reviews = Review::all();

        $restaurants = Restaurant::all();

        $restaurantbg = Restaurantbg::all();

        $articles = Article::take(3)->get();

        $category_room = CategoryRoom::all();

        $videos = Video::all();

        $contact = Contact::first();

        $icons = Icon::all();

        return view('backoffice.home.home', compact('slider', 'descriptions', 'rooms', 'services', 'gallery', 'reviews', 'restaurants', 'articles', 'videos', 'contact', 'category_room', 'restaurantbg', 'icons' ));
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
     * @param  \App\Http\Requests\StoreDescriptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDescriptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function show(Description $description)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function edit(Description $description)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDescriptionRequest  $request
     * @param  \App\Models\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //About
         $descriptions = Description::first();
         $descriptions->title = $request->get('title');
         $descriptions->subtitle = $request->get('subtitle');
         $descriptions->description = $request->get('description');
         $descriptions->title2 = $request->get('title2');
         $descriptions->description2 = $request->get('description2');
         
         Storage::put('public/assets/', $request->file('logo'));

         $newimage = $request->file('logo')->hashName();
         $image_path = public_path('storage/assets/' . $newimage);
         Image::make($image_path)->resize(219, 219)->save(public_path('images/'  . $newimage));

         $descriptions->logo = $newimage;
         $descriptions->save();
 
         return redirect()->back();


         
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function destroy(Description $description)
    {
        //
    }
}
