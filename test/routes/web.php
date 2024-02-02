<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
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
// client route
Route::prefix('category')->group(function(){
    // Danh sách chuyên mục
    Route::get('/',[CategoryController::class,'index'])->name('category.list');

    Route::get('/edit/{id}',[CategoryController::class,'getCategory'])->name('category.edit');;

    Route::post('',[CategoryController::class,'updateCategory']);

    Route::get('/add',[CategoryController::class,'addCategory'])->name('category.add');

    Route::post('/add',[CategoryController::class,'showCategory']);

    Route::delete('/delete/{id}',[CategoryController::class,'deleteCategory']);
});