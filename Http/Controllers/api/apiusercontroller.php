<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use \DateTime;

class apiusercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return user::with('loaisp')->get();
        return user::all();
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
        $db = new user();
        $db->full_name = $request->full_name;
        $db->user_name = $request->user_name;
        $db->users_name = $request->users_name;
        $db->email = $request->user_name;
        $db->password = $request->password;
        $db->phone = $request->phone;
        $db->Delet = 1;
        $db->address = $request->address;
        $db->created_at = new Datetime();
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return user::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $db = user::find($id);
        $db->full_name = $request->full_name;
        $db->user_name = $request->user_name;
        $db->users_name = $request->users_name;
        $db->email = $request->user_name;
        $db->password = $request->password;
        $db->phone = $request->phone;
        $db->address = $request->address;
        $db->updated_at = new Datetime();
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        user::findOrFail($id)->delete();
        return "Deleted";
    }
}
