<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{


    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treatments = DB::table('treatments')
          ->get();

        return view('treatments.index', ['treatments' => $treatments]);
    }

    public function file_add(Request $request)
    {
        $id=$request->id;
        $treatments = Treatment::find($id);

        $request->validate(['fajl' => 'required|mimes:jpg']);

        $folder = $treatments->code;
        $fajl = $request->file('fajl');
        $imefajla = $treatments->id . time(). '.' . $fajl->getClientOriginalExtension();
        $putanja = $fajl->storeAs($folder,$imefajla);
        $treatments->price = '5 KM';
        $treatments->status = 'KUPON JE UPOTRIJEBLJEN';
        $treatments->save();

        return redirect()->route('treatments')->with('success','Fajl dodan');

    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('treatments.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        
        ]);


        DB::table('treatments')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            
            
         ]);

        return redirect()->route('treatments');

    }


    /**
     * Display the specified resource.
     */
    public function show(Treatment $treatment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = $request->id;

        $treatments = DB::table('treatments')
        ->where('id', $id)
        ->get();

    
        return view('treatments.edit', ['treatments' => $treatments]);
    }

    /**
     * Update the specified resource in storage.
     */



    public function update(Request $request)
    {
        $id = $request->id;

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $update_query = DB::table('treatments')
        ->where('id', $id)
        ->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        
            ]);

        return redirect()->route('treatments');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Treatment $treatment)
    {
        //
    }

    public function delete(Request $request){
        $id=$request->id;
        
        Treatment::destroy($id);

        return redirect()->route('treatments');

    }
}
