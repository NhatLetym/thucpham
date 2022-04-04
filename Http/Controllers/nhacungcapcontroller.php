<?php

namespace App\Http\Controllers;

use App\Models\nhacungcap;
use Illuminate\Http\Request;

class nhacungcapcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = nhacungcap::all();
        return view('admin.nhacungcap.index', ['nhacungcap' => $db]);
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
     * @param  \App\Models\nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function show(nhacungcap $id)
    {
        $db = nhacungcap::find($id);
        return view('admin.nhacungcap.edit', ['nhacungcap' => $db]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function edit(nhacungcap $nhacungcap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $db = nhacungcap::find($request->id);
        $db->ten_ncc = $request->ten_ncc;
        $db->diachi_ncc = $request->diachi_ncc;
        $db->email = $request->email;
        $db->sdt = $request->sdt;
        $db->Delet = $request->Delet;
        $db->save();
        return redirect()->to('/admin/nhacungcap');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function destroy(nhacungcap $id)
    {
        $db = nhacungcap::find($id)->delete();
        return redirect()->to('/admin/nhacungcap');
    }
}
