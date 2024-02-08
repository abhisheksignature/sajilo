<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PackageCategory;
use App\Models\Package;

class PackageController extends Controller
{

public function test()
{
    $packageCategories = PackageCategory::all();
    return view('admin.add-new-package', compact('packageCategories'));
}

public function index()
{
    $packages = Package::orderBy('created_at', 'desc')->paginate(20);
    return view('admin.all-packages', compact('packages'));
}
public function detail($id)
    {
        $package = Package::find($id);

        if (!$package) {
            // If the package with the given ID is not found, you can handle it as you wish.
            // For example, you might want to redirect to a 404 page.
            abort(404, 'Package not found');
        }

        return view('admin.package-detail', compact('package'));
    }

public function store(Request $request)
{
    $validatedData = $request->validate([
        'package_name' => 'required|string',
        'package_place' => 'required|string',
        'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        'package_duration' => 'required|string',
        'package_price' => 'numeric|required',
        'package_category_id' => 'required|exists:package_categories,id',
    ]);

    if ($request->hasFile('image_path')) {
        $uploadedFile = $request->file('image_path');

        $imagePath = $uploadedFile->storeAs('package_images', $uploadedFile->getClientOriginalName(), 'public');

        // Check if 'image_path' key exists before assigning it to $validatedData
        if (isset($validatedData['image_path'])) {
            $validatedData['image_path'] = $imagePath;
        }
    }

    $package = Package::create([
        'package_name' => $validatedData['package_name'],
        'package_place' => $validatedData['package_place'],
        'image_path' => $validatedData['image_path'] ?? null, // Use null if the key is not set
        'package_duration' => $validatedData['package_duration'],
        'package_price' => $validatedData['package_price'],
        'package_category_id' => $validatedData['package_category_id'],
    ]);

    return redirect()->route('packages')->with('success', 'Package created successfully');
}

public function delete($id)
{
    // Find the package by ID
    $package = Package::find($id);

    // Check if the package exists
    if (!$package) {
        return redirect()->route('all.packages')->with('error', 'Package not found.');
    }

    // Delete the package
    $package->delete();

    return redirect()->route('all.packages')->with('success', 'Package deleted successfully.');
}


}
