<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\Rezervation;
use App\Models\Product;
use DB;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $checkouts = DB::table('checkouts')->get();

        return view('checkouts.index', ['checkouts' => $checkouts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $availableRezervations = Rezervation::whereNotIn('id', function ($query) {
            $query->select('reservation')->from('checkouts');
        })->get();

        $products = Product::all();

        return view('checkouts.add', compact('availableRezervations', 'products'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('checkouts')->insert([
            'reservation' => $request->reservation,
            'product' => $request->product,
            'review' => $request->review,
        ]);

        return redirect()->route('checkouts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}