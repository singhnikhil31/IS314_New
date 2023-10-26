<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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



Route::get("/",[HomeController::class,"index"]);

Route::get("/users",[AdminController::class,"user"]);

Route::get("/menu",[AdminController::class,"menu"]);

Route::post("/uploaditem",[AdminController::class,"upload"]);

Route::get("/deleteitem/{id}",[AdminController::class,"deleteitem"]);

Route::get("/updateview/{id}",[AdminController::class,"updateview"]);

Route::post("/update/{id}",[AdminController::class,"update"]);

Route::post("/feedback",[AdminController::class,"feedback"]);

Route::get("/viewfeedback",[AdminController::class,"viewfeedback"]);

Route::post("/addcart/{id}",[HomeController::class,"addcart"]);

Route::get("/showcart/{id}",[HomeController::class,"showcart"]);

Route::get("/remove/{id}",[HomeController::class,"remove"]);

Route::post("/orderconfirm",[HomeController::class,"orderconfirm"]);

Route::get("/orders",[AdminController::class,"orders"]);

Route::get("/redirects",[HomeController::class,"redirects"]);

Route::get('/search', [HomeController::class, 'search'])->name('search');


Route::get('/helppage', function () {
    return view('helppage');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
