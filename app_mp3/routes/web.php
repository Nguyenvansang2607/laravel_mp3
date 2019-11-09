<?php

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

Route::get('/login', function () {
    return view('frontend/login');
});
Route::get('database', function(){
    Schema::create('loaisp', function($table){
        $table->increments('id');
        $table->string('ten', 200);
    });
    echo "Đã thực hiện lệnh tạo bảng";
});
//auth
// Route::post('/dangnhap', function () {
//     return view('frontend/login');
// });
// Route::post('login', 'AuthController@login')->name('login');