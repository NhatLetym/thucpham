<?php

namespace App\Http\Controllers;

use App\Models\kho;
use Illuminate\Http\Request;

class khocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = kho::all();
        return view('admin.kho.index', ['kho' => $db]);
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
     * @param  \App\Models\kho  $kho
     * @return \Illuminate\Http\Response
     */
    public function show(kho $kho)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kho  $kho
     * @return \Illuminate\Http\Response
     */
    public function edit(kho $kho)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kho  $kho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $db = kho::find($request->id);
        // $db->id_sp = $request->id_sp;
        $db->sl = $request->sl;
        $db->save();
        return redirect()->to('/admin/kho');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kho  $kho
     * @return \Illuminate\Http\Response
     */
    public function destroy(kho $id)
    {
        $db = kho::find($id)->delete();
        return redirect()->to('/admin/kho');
    }
}
