<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function loginview()
    {
        return view('admin.login');
    }

    public function admin()
    {
        return view('admin.index');
    }

    public function register(Request $request)
    {

        $validation = [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins|max:255',
            'phone_number' => 'nullable|numeric|min:10|max:14',
            'image_path' => 'nullable|digits:10',   
            'date_of_birth' => 'date_format:Y-M-D|before:today',
            'password' => 'required|string|min:6',
        ];

        $request->validate($validation);
        $admin = Admin::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        if ($admin) {
            return redirect()->intended('/admin-login')->with('success', 'Registration successful. Please log in.');
        } else {
            return redirect()->back()->withInput()->withErrors([
                'registration_failed' => 'Registration failed. Please try again.'
            ]);
        }
    }

    public function update(Request $request)
{
    $admin = Auth::guard('admin')->user();

    $validation = [
        'first_name' => 'nullable|string|max:255',
        'last_name' => 'nullable|string|max:255',
        'email' => 'nullable|email|unique:admins,email,' . $admin->id,
        'old_email' => 'required|email',
        'phone_number' => 'nullable|numeric|min:10|max:14',
        'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'date_of_birth' => 'date_format:Y-M-D|before:today',
        'password' => 'nullable|string|min:6',
        'old_password' => 'required|string|min:6',
        'address' => 'nullable|string', // Add validation for the address field
    ];

    $request->validate($validation);

    // Check if the old email provided matches the current email
    if ($request->input('old_email') !== $admin->email) {
        return redirect()->back()->withErrors(['old_email' => 'The old email provided does not match your current email.']);
    }

    // Check if the old password provided matches the current password
    if ($request->input('old_password') && !Hash::check($request->input('old_password'), $admin->password)) {
        return redirect()->back()->withErrors(['old_password' => 'The old password provided does not match your current password.']);
    }

    $data = [
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'email' => $request->input('email'),
        'phone_number' => $request->input('phone_number'),
        'date_of_birth' => $request->input('date_of_birth'),
        'password' => $request->input('password') ? bcrypt($request->input('password')) : $admin->password,
        'address' => $request->input('address'), // Include the address in the update data
    ];

    // Handle image upload
    if ($request->hasFile('image_path')) {
        $imagePath = $request->file('image_path')->store('admin_images', 'public');
        $data['image_path'] = $imagePath;
    }

    $admin->update($data);

    return redirect()->back()->with('success', 'Profile updated successfully.');
}


    public function login(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|string',
        ];
        $request->validate($rules);
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->back()->withInput()
                ->withErrors(['login_failed' => 'Invalid email or password.']);
        }
    }

    public function logout(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
            return redirect()->route('login');
        }

        $this->guard()->logout();
        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect()->route('login');
    }
}
