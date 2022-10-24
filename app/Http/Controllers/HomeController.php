<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\Video;
use App\Models\Review;
use App\Models\Slider;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Restaurant;
use App\Models\ContactForm;
use App\Models\Description;
use App\Models\CategoryRoom;
use App\Models\Restaurantbg;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();

        $description = Description::all();

        $rooms = Rooms::take(3)->get();

        $service = Service::all();

        $gallery = Gallery::take(8)->get();

        $reviews = Review::all();

        $restaurants = Restaurant::all();

        $restaurantbg = Restaurantbg::all();

        $articles = Article::take(3)->get();

        $videos = Video::all();

        $contacts = Contact::all();

        $category_room = CategoryRoom::all();

        $contactme = ContactForm::all();


        return view('pages.home', compact('contactme', 'slider', 'description', 'rooms', 'service', 'gallery', 'reviews', 'restaurants', 'articles', 'videos', 'contacts', 'category_room', 'restaurantbg' ));
        


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
        //
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
