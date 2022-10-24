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


class HomeAdminController extends Controller
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //Contact information
        $contact = Contact::first();
        $contact->location =  $request->get('location');
        $contact->phone = $request->get('phone');
        $contact->fax = $request->get('fax');
        $contact->website = $request->get('website');
        $contact->email = $request->get('email');
        $contact->save();

        return redirect()->back();

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
