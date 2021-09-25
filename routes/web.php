<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CommunityMembersController;
use App\Http\Controllers\RestDataController;
use App\Http\Controllers\RestcallController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CatdescController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Categories Controller
Route::resource('/dashboard/categories', CategoryController::class);
// Products Controller 
Route::resource('/dashboard/products', ProductController::class);
Route::get('/products.search', [ProductController::class, 'search'])->name('products.search');
//  Galleries
Route::resource('/dashboard/galleries', GalleryController::class);
Route::get('/galleries.search', [GalleryController::class, 'search'])->name('galleries.search');
// Community Members
Route::resource('/dashboard/team', CommunityMembersController::class);
// Restaurant details
Route::resource('/dashboard/rest_data', RestDataController::class);
//  Restaurent forntend
Route::get('restaurant', [RestaurantController::class, 'index'])->name('restaurent.index');
Route::get('restaurant/about', [RestaurantController::class, 'about'])->name('restaurent.about');
Route::get('restaurant/menu', [RestaurantController::class, 'menu'])->name('restaurent.menu');
Route::get('restaurant/events', [RestaurantController::class, 'events'])->name('restaurent.events');
Route::get('restaurant/gallery', [RestaurantController::class, 'gallery'])->name('restaurent.gallery');
Route::get('restaurant/chefs', [RestaurantController::class, 'chefs'])->name('restaurent.chefs');
Route::get('restaurant/contact', [RestaurantController::class, 'contact'])->name('restaurent.contact');
Route::get('restaurant/book a table', [RestaurantController::class, 'booktable'])->name('restaurent.booktable');
//  Rest call
Route::resource('/dashboard/call', RestcallController::class);
Route::resource('/dashboard/contact', ContactController::class);

//   Categories food description
Route::resource('/dashboard/cat_desc', CatdescController::class);