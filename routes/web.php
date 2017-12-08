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

Route::get('/', function () {
    return view('admin.login');
});
Route::group(['prefix'=>'admin'],function(){

Route::get('/login', function () {
    return view('login');
});
Route::post('doLogin','AuthController@login')->name('login');

Route::group(['middleware'=>'auth'],function(){
Route::get('dashboard','HomeController@dashboard')->name('dashboard');
Route::get('roles','HomeController@showRoles')->name('showRoles');
Route::get('logout','AuthController@logout')->name('logout');
Route::get('branch','HomeController@showBranch');
});
});