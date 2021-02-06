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
    return view('layouts.main');
});

Route::get('blank', [PagesController::class, 'blank']);
Route::get('dashboard', [PagesController::class, 'index']);
Route::get('dashboard2', [PagesController::class, 'dashboard2']);
Route::get('widget', [PagesController::class, 'widget']);
Route::get('calendar', [PagesController::class, 'calendar']);
Route::get('mailbox', [PagesController::class, 'mailbox']);