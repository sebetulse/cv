<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProductController;
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
    return view('deneme');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/cv', [SkillController::class, 'home']
);
/*
Route::resource('/product', ProductController::class
);
*/
Route::get('/product',[ProductController::class, 'index']);
Route::get('/product/create',[ProductController::class, 'create']);
Route::post('/product/create',[ProductController::class, 'store']);
Route::get('/product/{id}',[ProductController::class, 'show']);
