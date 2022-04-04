<?php

namespace App\Http\Controllers;

use App\Models\sanpham;
use Illuminate\Http\Request;

class sanphamcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $db = sanpham::all();
        return view('admin.sanpham.index', ['sanpham' => $db]);
    }

    // public function loaisanpham()
    // {
    //     return $this->belongsTo(loaisanpham::class, 'id_loai_sp');
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $db = sanpham::all()->toArray();
        // return view('admin.sanpham.create', ['sanpham' => $db]);
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
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db = sanpham::find($id);
        return view('admin.sanpham.edit', ['sanpham' => $db]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function edit(sanpham $sanpham)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sanpham $sanpham)
    {
        $db = sanpham::find($request->id);
        $db->name = $request->name;
        $db->mota_sp = $request->description;
        $db->save();
        return redirect()->to('/admin/sanpham');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = sanpham::find($id)->delete();
        return redirect()->to('/admin/sanpham');
    }
}
