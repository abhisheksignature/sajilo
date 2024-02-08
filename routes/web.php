<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PackageCategoryController;
use App\Http\Controllers\HotelCategoryController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\HotelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group([], function () {

    Route::post('register', [AdminController::class, 'register'])->name('admin.register');

    Route::match(['get', 'post'], '/admin-login', [AdminController::class, 'login'])->name('admin.login');

    Route::get('login-view', [AdminController::class, 'loginview'])->name('login');
});

Route::post('admin', [AdminController::class, 'admin'])->name('admin.index');


Route::group(['middleware' => ['auth:admin']], function () {

    Route::get('/add-user', function () {
        return view('admin.add-new-user');
    });
    Route::get('/all-users', function () {
        return view('admin.all-users');
    });
    Route::get('/admin', function () {
        return view('admin.index');
    });
    Route::get('/package-detail', function () {
        return view('admin.package-detail');
    });
    Route::get('/add-new-package', function () {
        return view('admin.add-new-package');
    });
    Route::get('/all-hotel', function () {
        return view('admin.all-hotel');
    });
    Route::get('/hotel-details', function () {
        return view('admin.hotel-details');
    });
    Route::get('/add-new-hotel', function () {
        return view('admin.add-new-hotel');
    });
    Route::get('/add-new-room', function () {
        return view('admin.add-new-room');
    });
    Route::get('/booking', function () {
        return view('admin.booking');
    });
    Route::get('/reviews', function () {
        return view('admin.reviews');
    });
    Route::get('/setting', function () {
        return view('admin.setting');
    });

   // Route::get('login', [AdminController::class, 'loginview'])->name('login.form');
    Route::post('logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::patch('profile-update', [AdminController::class, 'update'])->name('admin.profile.update');

    // PackageCategoryController 
    Route::get('add-package-category', [PackageCategoryController::class, 'package'])->name('add.package.form');
    Route::get('package-category', [PackageCategoryController::class, 'index'])->name('all.package.categories');
    Route::post('add-package-category', [PackageCategoryController::class, 'addcategory'])->name('add.package.category');
    Route::patch('update-package-category', [PackageCategoryController::class, 'updatecategory'])->name('edit.package.category');

    // HotelCategoryController
    Route::get('hotel-category', [HotelCategoryController::class, 'hotelcategory'])->name('all.hotel.categories');
    Route::get('add-hotel-category', [HotelCategoryController::class, 'index'])->name('add.hotel.form');
    Route::post('all-hotel-category', [HotelCategoryController::class, 'addcategory'])->name('add.hotel.category');
    Route::patch('update-hotel-category',[HotelCategoryController::class, 'updatecategory'])->name('update.hotel.category');

    // PackageController 
    Route::get('package', [PackageController::class, 'test'])->name('package');
    Route::get('all-packages', [PackageController::class, 'index'])->name('packages');
    Route::post('add-package', [PackageController::class, 'store'])->name('add.package');
    Route::get('package/{id}', [PackageController::class, 'detail'])->name('package.detail');
    Route::delete('package/{id}', [PackageController::class, 'delete'])->name('package.delete');

    // HotelController 
    Route::post('add-hotel', [HotelController::class, 'store'])->name('add.hotel');
    Route::get('hotel', [HotelController::class, 'list'])->name('add.new.hotel');
    //Route::get('get-states/{country_id}', [HotelController::class, 'getStates'])->name('get.states');



   


});



Route::get('/admin-register', function () {
    return view('admin.sign-up');
});

Route::get('/admin-login', function () {
    return view('admin.login');
});

//    User Auth

Route::group([], function () {
    Route::get('/', function () {
        return view('frontend/index');
    })->name('home');

    Route::get('/hotel-list', function () {
        return view('frontend/hotel-list');
    })->name('hotel');

    Route::get('/tour-list', function () {
        return view('frontend/tour-list');
    })->name('tour');

    Route::get('/flight-left-sidebar', function () {
        return view('frontend/flight-left-sidebar');
    })->name('flight');

    Route::get('/about-us', function () {
        return view('frontend/about-us-2');
    })->name('aboutus');

    Route::get('/contact', function () {
        return view('frontend/contact-2');
    })->name('contact');

    Route::get('/sign-up', function () {
        return view('frontend/signup');
    })->name('signup');


   

});
