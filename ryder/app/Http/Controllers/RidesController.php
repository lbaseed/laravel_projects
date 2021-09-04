<?php

namespace App\Http\Controllers;

use App\Models\Rides;
use Illuminate\Http\Request;

class RidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Rides::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $request->validate([
            "rider_name" => "required",
            "rider_phone" => "required",
        ]);
        return Rides::create($request->all());
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Rides::find($id);
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
        $ride = Rides::find($id);
        $ride->update($request->all());

        return $ride;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Rides::destroy($id);

    }

    /**
     * search the specified resource from storage.
     *
     * @param  str  $name $phone
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return Rides::where('rider_name', 'like', '%'.$name.'%')
        ->orWhere('rider_phone', 'like', '%'.$name.'%')
        ->get();

    }
}
