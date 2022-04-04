<?php

namespace App\Http\Controllers;

use App\Models\loaisanpham;
use Illuminate\Http\Request;

class loaisanphamcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = loaisanpham::all();
        return view('admin.loaisanpham.index', ['loaisanpham' => $db]);
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
     * @param  \App\Models\loaisanpham  $loaisanpham
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db = loaisanpham::find($id);
        return view('admin.loaisanpham.edit', ['loaisanpham' => $db]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\loaisanpham  $loaisanpham
     * @return \Illuminate\Http\Response
     */
    public function edit(loaisanpham $loaisanpham)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\loaisanpham  $loaisanpham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $db = loaisanpham::find($request->id);
        $db->tenloai = $request->tenloai;
        $db->Delet = $request->Delet;
        $db->save();
        return redirect()->to('/admin/loaisanpham');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\loaisanpham  $loaisanpham
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = loaisanpham::find($id)->delete();
        return redirect()->to('/admin/loaisanpham');
        //
    }
}
