<?php

namespace App\Http\Controllers;

use App\Models\chitietban;
use Illuminate\Http\Request;

class chitietbancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $db = chitietban::all();
        return view('admin.chitietban.index', ['chitietban' => $db]);
    }

    // public function loaichitietban()
    // {
    //     return $this->belongsTo(loaichitietban::class, 'id_loai_sp');
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $db = chitietban::all()->toArray();
        // return view('admin.chitietban.create', ['chitietban' => $db]);
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
     * @param  \App\Models\chitietban  $chitietban
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db = chitietban::find($id);
        return view('admin.chitietban.edit', ['chitietban' => $db]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chitietban  $chitietban
     * @return \Illuminate\Http\Response
     */
    public function edit(chitietban $chitietban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\chitietban  $chitietban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chitietban $chitietban)
    {
        $db = chitietban::find($request->id);
        $db->id_bill_ban = $request->id_bill_ban;
        $db->id_sp = $request->id_sp;
        $db->sl = $request->sl;
        $db->save();
        return redirect()->to('/admin/chitietban');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chitietban  $chitietban
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = chitietban::find($id)->delete();
        return redirect()->to('/admin/chitietban');
    }
}
