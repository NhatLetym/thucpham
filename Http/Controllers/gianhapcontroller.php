<?php

namespace App\Http\Controllers;

use App\Models\gianhap;
use Illuminate\Http\Request;

class gianhapcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $db = gianhap::all();
        return view('admin.gianhap.index', ['gianhap' => $db]);
    }

    // public function loaigianhap()
    // {
    //     return $this->belongsTo(loaigianhap::class, 'id_loai_sp');
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $db = gianhap::all()->toArray();
        // return view('admin.gianhap.create', ['gianhap' => $db]);
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
     * @param  \App\Models\gianhap  $gianhap
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db = gianhap::find($id);
        return view('admin.gianhap.edit', ['gianhap' => $db]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gianhap  $gianhap
     * @return \Illuminate\Http\Response
     */
    public function edit(gianhap $gianhap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gianhap  $gianhap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gianhap $gianhap)
    {
        $db = gianhap::find($request->id);
        $db->id_ncc = $request->id_ncc;
        $db->id_nhanvien = $request->id_nhanvien;
        $db->save();
        return redirect()->to('/admin/gianhap');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gianhap  $gianhap
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = gianhap::find($id)->delete();
        return redirect()->to('/admin/gianhap');
    }
}
