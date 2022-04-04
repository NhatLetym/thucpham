<?php

namespace App\Http\Controllers;

use App\Models\phanhoi;
use Illuminate\Http\Request;

class phanhoicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = phanhoi::all();
        return view('admin.phanhoi.index', ['phanhoi' => $db]);
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
     * @param  \App\Models\phanhoi  $phanhoi
     * @return \Illuminate\Http\Response
     */
    public function show(phanhoi $id)
    {
        $db = phanhoi::find($id);
        return view('admin.phanhoi.edit', ['phanhoi' => $db]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\phanhoi  $phanhoi
     * @return \Illuminate\Http\Response
     */
    public function edit(phanhoi $phanhoi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\phanhoi  $phanhoi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, phanhoi $phanhoi)
    {
        $db = phanhoi::find($request->id_phan_hoi);
        $db->id_tk = $request->id_tk;
        $db->id_sp = $request->id_sp;
        $db->save();
        return redirect()->to('/admin/phanhoi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\phanhoi  $phanhoi
     * @return \Illuminate\Http\Response
     */
    public function destroy(phanhoi $id)
    {
        $db = phanhoi::find($id)->delete();
        return redirect()->to('/admin/phanhoi');
    }
}
