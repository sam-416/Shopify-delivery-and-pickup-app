<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
class LocationController extends Controller
{
   
    public function index()
    {
        $locations = Location::all();
        return view('home.index', compact($locations));
    }

    public function save(Request $request){
        Location::where('location_id', $request->input('id'))->update([
            'postal_code' => implode(',', $request->input('postcode'))
        ]);
    }
}
