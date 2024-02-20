<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Stylist;
use Illuminate\Http\Request;

class StylistController extends Controller
{
    /**
     * Display a listing of the resource.
      * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stylists = DB::table('stylists')
          ->get();

        return view('stylists.index', ['stylists' => $stylists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stylists.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        DB::table('stylists')->insert([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'phone' => $request->phone,
            'speciality' => $request->speciality,
         ]);

        return redirect()->route('stylists');

    }

    /**
     * Display the specified resource.
     */
    public function show(Stylist $stylist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = $request->id;

        $stylists = DB::table('stylists')
        ->where('id', $id)
        ->get();

    
        return view('stylists.edit', ['stylists' => $stylists]);
    }


    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stylist $stylist)
    {
        //
    }

    public function delete(Request $request){
        $id=$request->id;
        
        Stylist::destroy($id);

        return redirect()->route('stylists');

    }

    public function update(Request $request)
    {
        $id = $request->id;

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $update_query = DB::table('stylists')
        ->where('id', $id)
        ->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'phone' => $request->phone,
            'speciality' => $request->speciality,
            ]);

        return redirect()->route('stylists');
    }

}
