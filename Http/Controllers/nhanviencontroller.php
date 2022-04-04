<?php

namespace App\Http\Controllers;

use App\Models\nhanvien;
use Illuminate\Http\Request;

class nhanviencontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = nhanvien::all();
        return view('admin.nhanvien.index', ['nhanvien' => $db]);
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
     * @param  \App\Models\nhanvien  $nhanvien
     * @return \Illuminate\Http\Response
     */
    public function show(nhanvien $id)
    {
        $db = nhanvien::find($id);
        return view('admin.nhanvien.edit', ['nhanvien' => $db]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nhanvien  $nhanvien
     * @return \Illuminate\Http\Response
     */
    public function edit(nhanvien $nhanvien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nhanvien  $nhanvien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $db = nhanvien::find($request->id);
        $db->ten_nhanvien = $request->ten_nhanvien;
        $db->gioitinh = $request->gioitinh;
        $db->ngaysinh = $request->ngaysinh;
        $db->quequan = $request->quequan;
        $db->sdt = $request->sdt;
        $db->email = $request->email;
        $db->save();
        return redirect()->to('/admin/nhanvien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nhanvien  $nhanvien
     * @return \Illuminate\Http\Response
     */
    public function destroy(nhanvien $id)
    {
        $db = nhanvien::find($id)->delete();
        return redirect()->to('/admin/nhanvien');
    }
}
