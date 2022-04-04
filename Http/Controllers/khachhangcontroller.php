<?php

namespace App\Http\Controllers;

use App\Models\khachhang;
use Illuminate\Http\Request;

class khachhangcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $db = khachhang::all();
        return view('admin.khachhang.index', ['khachhang' => $db]);
    }

    // public function loaikhachhang()
    // {
    //     return $this->belongsTo(loaikhachhang::class, 'id_loai_sp');
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $db = khachhang::all()->toArray();
        // return view('admin.khachhang.create', ['khachhang' => $db]);
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
     * @param  \App\Models\khachhang  $khachhang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db = khachhang::find($id);
        return view('admin.khachhang.edit', ['khachhang' => $db]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\khachhang  $khachhang
     * @return \Illuminate\Http\Response
     */
    public function edit(khachhang $khachhang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\khachhang  $khachhang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, khachhang $khachhang)
    {
        $db = khachhang::find($request->id);
        $db->ten_kh = $request->ten_kh;
        $db->email = $request->email;
        $db->dia_chi = $request->dia_chi;
        $db->sdt = $request->sdt;
        $db->save();
        return redirect()->to('/admin/khachhang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\khachhang  $khachhang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = khachhang::find($id)->delete();
        return redirect()->to('/admin/khachhang');
    }
}
