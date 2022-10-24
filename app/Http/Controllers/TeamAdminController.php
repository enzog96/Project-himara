<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Statut;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class TeamAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Staff::all();

        $statuts = Statut::all();

        return view('backoffice.home.team', compact('members', 'statuts'));
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
     * @param  \App\Models\Staff  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $id)
    {
        //Members
        $members = $id;
        $members->status = $request->status;
        $members->name = $request->name;
        $members->description = $request->description;
        Storage::put('public/assets/', $request->file('image'));
        
        $newimage = $request->file('image')->hashName();
        $image_path = public_path('storage/assets/' . $newimage);
        Image::make($image_path)->resize(219, 219)->save(public_path('images/staff/'  . $newimage));

        $members->image = $newimage;
        $members->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $members = Staff::all();

        foreach ($members as $member) {
            if ($member->id == $request->title) {
                $member->delete();
                return redirect()->back();
            }
        }
    }
}
