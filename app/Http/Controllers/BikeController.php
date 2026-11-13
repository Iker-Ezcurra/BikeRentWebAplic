<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bike;

class BikeController extends Controller
{
    public function index()
    {
        $bikes = Bike::all();

        return view('bikes.index', compact('bikes'));
    }
}
