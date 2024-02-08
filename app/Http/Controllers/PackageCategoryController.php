<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PackageCategory;

class PackageCategoryController extends Controller
{
    public function index()
    {
        $packageCategories = PackageCategory::all();

        return view('admin.all-package-categories', compact('packageCategories'));
    }


   public function package(){
    return view ('admin.add-package-category');
}


   public function addcategory(Request $request){
   
       $validationRules = [
           'tour_name' => 'required|string',
           'tour_place' => 'required|string',
           'tour_description' => 'required|string',
           'image_path' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048'
       ];
   
       $request->validate($validationRules);
   
       $data = [
           'tour_name' => $request->input('tour_name'),
           'tour_place' => $request->input('tour_place'),
           'tour_description' => $request->input('tour_description'),
       ];

       if ($request->hasFile('image_path')) {
           $imagePath = $request->file('image_path')->store('category_images', 'public');
           $data['image_path'] = $imagePath;
       }
   
       PackageCategory::create($data);

       return redirect()->route('all.package.categories')->with('success', 'Category added successfully');
   }

public function updatecategory(Request $request, $categoryId){

    $validationRules = [
        'tour_name' => 'required|string',
        'tour_place' => 'required|string',
        'tour_description' => 'required|string',
        'image_path' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048'
    ];

    $request->validate($validationRules);

    $category = PackageCategory::findOrFail($categoryId);

    $category->update([
        'tour_name' => $request->input('tour_name'),
        'tour_place' => $request->input('tour_place'),
        'tour_description' => $request->input('tour_description'),
    ]);

    if ($request->hasFile('image_path')) {
        if ($category->image_path) {
            Storage::disk('public')->delete($category->image_path);
        }

        $imagePath = $request->file('image_path')->store('category_images', 'public');
        $category->update(['image_path' => $imagePath]);
    }

    return redirect()->route('packagedetail')->with('success', 'Category updated successfully');
}

public function deletecategory($categoryId){

    $category = PackageCategory::findOrFail($categoryId);

    if ($category->image_path) {
        Storage::disk('public')->delete($category->image_path);
    }

    $category->delete();

    return redirect()->route('packagedetail')->with('success', 'Category deleted successfully');
}

}   