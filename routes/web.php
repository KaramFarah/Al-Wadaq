<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\WebsiteController;



Route::get('/', function () {

    return redirect()->route('website.home');

});

Route::view('/test', 'welcome');
Route::prefix('admin')->group(function () {
    //Dashboard
    Route::view('dashboard-home' , 'dashboard.index')->name('dashboard.home');
    
    Route::resource('slider', 'App\Http\Controllers\SliderController');
    Route::resource('categories', 'App\Http\Controllers\CategoryController');
    Route::resource('products', 'App\Http\Controllers\ProductController');


    
    //Pages
    Route::view('pages-blank', 'dashboard.pages-blank')->name('blank');
    Route::view('pages-error-404', 'dashboard.pages-error-404')->name('error-404');
    Route::view('pages-faq', 'dashboard.pages-faq')->name('faq');
    Route::view('pages-login', 'dashboard.pages-login')->name('login');
    Route::view('pages-register', 'dashboard.pages-register')->name('register');


    Route::get('user-profile' , function(){

        return view('dashboard.users-profile')->with(
            ['email' => auth()->user()->email]
        );
    })->name('user-profile');
});


Route::prefix('alwadaq')->group(function () {
    Route::get('website-home', [WebsiteController::class , 'home'])->name('website.home');
    Route::get('website-categories', [WebsiteController::class , 'categories'])->name('website.categories');
    // Route::view('website-home', 'website/index')->name('website.home');
});





Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
