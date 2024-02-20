<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProducttController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // return Product::all();

        $products = DB::table('products')
        ->get();

      return view('products.index', ['products' => $products]);
    }

}

