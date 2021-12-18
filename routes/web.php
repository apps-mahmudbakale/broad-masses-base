<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/about', function () {
    return view('about');
})->name('about');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('register', [UserController::class, 'register'])->name('register.store');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function ()
{
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('users', UserController::class);
});


