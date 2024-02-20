<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Rezervation;
use Illuminate\Http\Request;

class RezervationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rezervations = DB::table('rezervations')
        ->get();

      return view('rezervations.index', ['rezervations' => $rezervations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $clients = DB::table('clients')->get();
    $treatments = DB::table('treatments')->get();
    $stylists = DB::table('stylists')->get();

    return view('rezervations.add', compact('clients', 'treatments', 'stylists'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       

        DB::table('rezervations')->insert([
            'date' => $request->date,
            'client' => $request->client,
            'treatment' => $request->treatment,
            'stylist' => $request->stylist,
            
         ]);

        return redirect()->route('rezervations');

    }

    /**
     * Display the specified resource.
     */
    public function show(Rezervation $rezervation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rezervation $rezervation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rezervation $rezervation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rezervation $rezervation)
    {
        //
    }
}
