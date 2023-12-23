<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function addTrip()
    {
        $locations = Location::get();
        return view('pages.add_trip', compact('locations'));
    }

    public function storeTrip(Request $request)
    {

        Trip::insert([
            "name"              => $request->name,
            "start_location_id" => $request->start_location_id,
            "end_location_id"   => $request->end_location_id,
            "date"              => $request->date,
        ]);

        return redirect()->back();
        return response($request);
    }

    public function searchTrip(Request $request)
    {

        $trips = Trip::get();
        return view('pages.searched_trip', compact('trips'));
    }
}
