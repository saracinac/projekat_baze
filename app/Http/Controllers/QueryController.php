<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QueryController extends Controller
{
    public function index()
    {
        // Count how many times 'Pedikura' treatment has been used
        $balayage_count = DB::table('rezervations')
            ->join('treatments', 'rezervations.treatment', '=', 'treatments.id')
            ->where('treatments.name', 'Balayage')
            ->count();

        // Other logic for your index function
        // For example, passing data to a view


        $stylist_count = DB::table('rezervations')
    ->join('stylists', 'rezervations.stylist', '=', 'stylists.id')
    ->where('stylists.name', 'Sara')
    ->where('stylists.surname', 'Cinaci')
    ->count();

    $checkout_count = DB::table('checkouts')
    ->join('rezervations', 'checkouts.reservation', '=', 'rezervations.id')
    ->join('clients', 'rezervations.client', '=', 'clients.id')
    ->where('clients.name', 'Amra')
    ->count();

    $balayage_clients = DB::table('rezervations')
    ->join('clients', 'rezervations.client', '=', 'clients.id')
    ->join('treatments', 'rezervations.treatment', '=', 'treatments.id')
    ->select('clients.name', 'clients.surname')
    ->where('treatments.name', 'Balayage')
    ->get();

    $reviews = DB::table('checkouts')
    ->join('rezervations', 'checkouts.reservation', '=', 'rezervations.id')
    ->join('stylists', 'rezervations.stylist', '=', 'stylists.id')
    ->select('checkouts.review')
    ->where('stylists.name', 'Elmin')
    ->where('stylists.surname', 'Midzic')
    ->get();

    return view('querys.index', [
        'balayage_count' => $balayage_count,
        'stylist_count' => $stylist_count,
        'checkout_count'=>$checkout_count,
        'balayage_clients'=>$balayage_clients,
        'reviews'=>$reviews

    ]);

    }
}