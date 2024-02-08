<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Amenity;
use App\Models\HotelCategory;
use App\Models\Country;
use App\Models\State;

use App\Models\Inclusion;

class HotelController extends Controller
{
    public function list(Request $request)
    {
        $categories = HotelCategory::all();
        $countries = Country::all();
    
        if ($request->ajax()) {
            // Fetch states based on the selected country
            $states = State::where('country_id', $request->country)->get();
            return response()->json(['states' => $states]);
        }
    
        // If not an AJAX request, just return the view with categories and countries
        return view('admin.add-new-hotel', compact('categories', 'countries'));
    }
    
    

    // public function getStates($country_id)
    // {
    //     $states = State::where('country_id', $country_id)->get();
    //     return response()->json($states);
    // }
    

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:hotel_categories,id',
            'facility' => 'required|string',
            'address' => 'required|string',
            'country_id' => 'required|exists:countries,id',
            'state_id' => 'required|exists:states,id',
            'city' => 'required|string|max:255',
            'zip' => 'required|string|max:10',
            'contact_number' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'check_in' => 'nullable|date',
            'check_out' => 'nullable|date',
        ]);

        $hotel = Hotel::create($request->only([
            'name', 'category_id', 'facility', 'address', 'country_id', 'state_id',
            'city', 'zip', 'contact_number', 'email', 'check_in', 'check_out'
        ]));

        return redirect()->route('admin.hotels.index')->with('success', 'Hotel created successfully!');
    }

    

}
    


