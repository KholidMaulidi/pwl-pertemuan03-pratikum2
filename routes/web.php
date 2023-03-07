<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SelamatController;

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

Route::get('/tutor', function(){
    return view('welcome');
});

Route::get('/', function () {
    return view('master');
});

Route::get('/pengalaman-kuliah', [ContentController::class, 'content'])->name('content_kuliah');

Route::get('/profile/{id?}', [ContactController::class, 'profile'])->name('profile');

Route::get('/', [SelamatController::class, 'selamat'])->name('selamat');
