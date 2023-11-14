<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
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
// All listings
Route::get('/', [ListingController::class, 'index']);

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Edit Listings
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update Listings
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete Lisitngs
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Show login form
Route::get('/listings/manage', [ListingController::class, 'manage']);

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);


// Show register/create Form
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

// Create new user
Route::post('/users', [UserController::class, 'store']);

// Logout
Route::post('/logout', [UserController::class, 'logout']);

// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Show manage Listings