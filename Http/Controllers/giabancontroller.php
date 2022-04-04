<?php

namespace App\Http\Controllers;

use App\Models\giaban;
use Illuminate\Http\Request;

class giabancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $db = giaban::all();
        return view('admin.giaban.index', ['giaban' => $db]);
    }

    // public function giaban()
    // {
    //     return $this->belongsTo(giaban::class, 'id_loai_sp');
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $db = giaban::all()->toArray();
        // return view('admin.giaban.create', ['giaban' => $db]);
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
     * @param  \App\Models\giaban  $giaban
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db = giaban::find($id);
        return view('admin.giaban.edit', ['giaban' => $db]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\giaban  $giaban
     * @return \Illuminate\Http\Response
     */
    public function edit(giaban $giaban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\giaban  $giaban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, giaban $giaban)
    {
        $db = giaban::find($request->id);
        $db->id_kh = $request->id_kh;
        $db->date_order = $request->date_order;
        $db->tong_tien = $request->tong_tien;
        $db->save();
        return redirect()->to('/admin/giaban');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\giaban  $giaban
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = giaban::find($id)->delete();
        return redirect()->to('/admin/giaban');
    }
}
