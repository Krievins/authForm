<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::middleware(['auth'])->group(function () {
    Route::get('/resources/views/profile/profile', 'UsersController@profile')->name('profile');
    Route::get('/resources/views/profile/edit-profile', 'UsersController@edit_profile')->name('edit-profile');
    Route::put('/resources/views/profile/profile', 'UsersController@update')->name('users.update-profile');
});

