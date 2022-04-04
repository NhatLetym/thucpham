<?php

namespace App\Http\Controllers;

use App\Models\chitietnhap;
use Illuminate\Http\Request;

class chitietnhapcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $db = chitietnhap::all();
        return view('admin.chitietnhap.index', ['chitietnhap' => $db]);
    }

    // public function loaichitietnhap()
    // {
    //     return $this->belongsTo(loaichitietnhap::class, 'id_loai_sp');
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $db = chitietnhap::all()->toArray();
        // return view('admin.chitietnhap.create', ['chitietnhap' => $db]);
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
     * @param  \App\Models\chitietnhap  $chitietnhap
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db = chitietnhap::find($id);
        return view('admin.chitietnhap.edit', ['chitietnhap' => $db]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chitietnhap  $chitietnhap
     * @return \Illuminate\Http\Response
     */
    public function edit(chitietnhap $chitietnhap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\chitietnhap  $chitietnhap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chitietnhap $chitietnhap)
    {
        $db = chitietnhap::find($request->id);
        $db->id_bill_nhap = $request->id_bill_nhap;
        $db->id_sp = $request->id_sp;
        $db->sl = $request->sl;
        $db->don_vi = $request->don_vi;
        $db->save();
        return redirect()->to('/admin/chitietnhap');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chitietnhap  $chitietnhap
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = chitietnhap::find($id)->delete();
        return redirect()->to('/admin/chitietnhap');
    }
}
