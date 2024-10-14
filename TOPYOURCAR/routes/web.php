<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;

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

Route::get('/logout', function () {
    Auth::logout();
    return redirect('authorization');
})->name('logout');

Route::get('/registration', function () {
    return view('registration');
})->name('registration');
Route::post('/registration', [UserController::class, 'registration']);
Route::get('/authorization', function () {
    return view('authorization');
})->name('authorization');
Route::post('/authorization', [UserController::class, 'authorization']);

Route::middleware(['auth'])->group(function () {
    Route::get('/main', [Controller::class, 'main'])->name('main');
    Route::get('/catalog', [Controller::class, 'catalog'])->name('catalog');

});
