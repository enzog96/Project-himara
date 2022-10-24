<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\Review;
use App\Models\Contact;
use App\Models\Roomtag;
use App\Models\CategoryRoom;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class RoomAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $contacts = Contact::all();

        $rooms = Rooms::all();

        $roomcate = CategoryRoom::all();

        $tags = Roomtag::all();

        return view('backoffice.home.rooms', compact('contacts', 'rooms', 'roomcate', 'tags'));

        
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
        $contacts = Contact::all();

        $room = Rooms::find($id);

        $rooms = Rooms::take(3)->get();

        $roomcate = CategoryRoom::all();

        $tags = Roomtag::all();

        $reviews = Review::take(3)->get();

        return view('backoffice.home.room-show', compact('contacts','rooms', 'room', 'roomcate', 'tags', 'reviews'));
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
     * @param  \App\Models\Rooms  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rooms $id)
    {
        $rooms = $id;
        $rooms->title = $request->title;
        $rooms->description = $request->description;
        $rooms->smalldescription = $request->smalldescription;
        $rooms->price = $request->price;
        $rooms->bed = $request->bed;
        $rooms->guest = $request->guest;
        $rooms->rating = $request->rating;
        $rooms->stars = $request->stars;
        $rooms->size = $request->size;
        $rooms->category_rooms_id = $request->category_rooms_id;
        Storage::put('public/assets/', $request->file('image'));
        
        $newimage = $request->file('image')->hashName();
        $image_path = public_path('storage/assets/' . $newimage);
        Image::make($image_path)->resize(1170, 750)->save(public_path('images/rooms/'  . $newimage));

        $rooms->image = $newimage;
        $rooms->save();

       


        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $rooms = Rooms::all();

        foreach ($rooms as $room) {
            if ($room->id == $request->title) {
                $room->delete();
                return redirect()->back();
            }
        }

       
    }
}
