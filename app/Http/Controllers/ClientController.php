<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = DB::table('clients')
        ->get();

      return view('clients.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        DB::table('clients')->insert([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'phone' => $request->phone,
            'adress' => $request->adress,
         ]);

        return redirect()->route('clients');

    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = $request->id;

        $clients = DB::table('clients')
        ->where('id', $id)
        ->get();

    
        return view('clients.edit', ['clients' => $clients]);
    }

    /**
     * Update the specified resource in storage.
 */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }

    public function delete(Request $request){
        $id=$request->id;
        
        Client::destroy($id);

        return redirect()->route('clients');

    }
    public function update(Request $request)
    {
        $id = $request->id;

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $update_query = DB::table('clients')
        ->where('id', $id)
        ->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'phone' => $request->phone,
            'adress' => $request->adress,
            ]);

        return redirect()->route('clients');
    }
}
