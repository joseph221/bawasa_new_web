<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\admin_controller;
use App\Http\Controllers\admin\Anouncement_controller;
use App\Http\Controllers\admin\Event_controller;

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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user', [admin_controller::class,'registered'])->name('users');

Route::get('/anouncement',[Anouncement_controller::class,'index'])->name('anouncement');
Route::get('/view-anouncement', function () {
    return view('admin.anouncement.anouncements');
});
Route::get('/create_anouncement',[Anouncement_controller::class,'store']);
Route::get('/anouncement/{id}',[Anouncement_controller::class,'edit']);
Route::post('/update_anouncement/{id}',[Anouncement_controller::class,'update']);
Route::delete('/delete_anouncement/{id}',[Anouncement_controller::class,'destroy']);

Route::get('/events',[Event_controller::class,'index']);


