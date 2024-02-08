<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HotelCategory;

class HotelCategoryController extends Controller
{
    public function hotelcategory(){
        return view ('admin.all-hotel-categories');
    }
    public function index(){
        return view ('admin.add-hotel-category');
    }


    public function addcategory(Request $request){
   
        $validationRules = [
            'hotel_name' => 'required|string',
            'hotel_description' => 'required|string',
        ];
    
        $request->validate($validationRules);
    
        $data = [
            'hotel_name' => $request->input('hotel_name'),
            'hotel_description' => $request->input('hotel_description'),
        ];
 
        HotelCategory::create($data);
 
        return redirect()->route('add.hotel.category')->with('success', 'Category added successfully');
    }

    public function update(Request $request, $categoryId){

        $validation = [
            'hotel_name' => 'nullable|required|string',
            'hotel_description' => 'nullable|required|string',
        ];

        $request->validate($validation);
        
        $category = PackageCategory::findOrFail($categoryId);

        $category->update([
            'hotel_name' => $request->input('hotel_name'),
            'hotel_descrption' => $request->input('tour_description'),
        ]);

        return redirect()->route('hoteldetail')->with('success', 'Category updated successfully');

    }

    public function deletecategory($categoryId){

        $category = HotelCategory::findOrFail($categoryId);
    
        $category->delete();
    
        return redirect()->route('hoteldetail')->with('success', 'Category deleted successfully');
    }
 


}
