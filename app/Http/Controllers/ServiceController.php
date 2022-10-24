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
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Termwind\Components\Dd;

class ServiceController extends Controller
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

        $restaurantbgs = Restaurantbg::all();

        $articles = Article::take(3)->get();

        $videos = Video::all();

        $contact = Contact::first();

        $category_room = CategoryRoom::all();

        $icons = Icon::all();

        return view('backoffice.home.home', compact('slider', 'descriptions', 'rooms', 'services', 'gallery', 'reviews', 'restaurants', 'articles', 'videos', 'contact', 'category_room', 'restaurantbgs', 'icons' ));
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
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $id)
    {
        //Service
        $services = $id;
        $services->icon = $request->icon;
        $services->title = $request->title;
        $services->description = $request->description;
        Storage::put('public/assets/', $request->file('image'));
        
        $newimage = $request->file('image')->hashName();
        $image_path = public_path('storage/assets/' . $newimage);
        Image::make($image_path)->resize(1170, 750)->save(public_path('images/services/'  . $newimage));

        $services->image = $newimage;
        $services->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // return dd($request->title);

        $services = Service::all();

        foreach ($services as $service) {
            if ($service->id == $request->title) {
                $service->delete();
                return redirect()->back();
            }
        }

        // Service::find($id)->delete();
        // return redirect()->back();
    }

      
}
