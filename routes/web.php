<?php

use App\Http\Controllers\WeddingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome', ["title" => "Wedding of Tezar & Sahira"]);
});

Route::get('/wedding-invitation-from/{partner1}/{partner2}', [WeddingController::class, 'weddingHome'])->name('wedding-invitation');
