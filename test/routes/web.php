<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/unicode',function(){
//   return view('form');
// });
// Route::get('/product',function(){
//     return view('product');
// });
// Route::post('unicode',function(){
// return 'phuong thuc post cuar path';
// });

// Route::put('unicode',function(){
//     return 'phương thức put';
// });

Route::redirect('unicode','show-form');

Route::prefix('url')->group(function(){
    Route::get('show-form',function(){
        return view('form');
    });
    Route::prefix('products')->group(function(){
        Route::get('/',function(){
            return 'Danh sach san pham';
        });
        Route::get('add',function(){
            return 'Thêm sản phẩm';
        });
        Route::get('edit',function(){
            return 'chỉnh sửa';
        });
    });
});