<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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
    return view('welcome');
});

Route::prefix('auth')->group(function (){
    Route::prefix('google')->group(function (){
        Route::get('/redirect', function () {
            return Socialite::driver('google')->redirect();
        });

        Route::get('/callback', function () {
            $user = Socialite::driver('google')->user();
        });
    });
});

