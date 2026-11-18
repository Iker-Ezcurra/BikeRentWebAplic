<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bike;

class BikeController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $bikes = Bike::query()
            ->when($search, function ($query, $search) {
                $query->where('model', 'LIKE', "%{$search}%")
                    ->orWhere('serial_number', 'LIKE', "%{$search}%")
                    ->orWhere('status', 'LIKE', "%{$search}%");
            })
            ->get();

        if ($request->ajax()) {
            return view('bikes.lista', compact('bikes'));
        }

        return view('bikes.index', compact('bikes'));
    }

    public function show(Bike $bike)
    {
        return view('bikes.show', compact('bike'));
    }
}
