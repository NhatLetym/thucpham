<?php

namespace App\Http\Controllers;

use App\Models\slide;
use Illuminate\Http\Request;

class slidecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = slide::all();
        return view('admin.slide.index', ['slide' => $db]);
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
     * @param  \App\Models\slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(slide $id)
    {
        $db = slide::find($id);
        return view('admin.slide.edit', ['slide' => $db]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(slide $slide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $db = slide::find($request->id_slide);
        $db->image = $request->image;
        $db->save();
        return redirect()->to('/admin/slide');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(slide $id)
    {
        $db = slide::find($id)->delete();
        return redirect()->to('/admin/slide');
    }
}
