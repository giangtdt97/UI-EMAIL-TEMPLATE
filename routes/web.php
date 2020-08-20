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
    return view('welcome');
});
Route::get('register','sellerRegistrationController@index')->name('accountRegister');
Route::get('verified','sellerAcountVerifiedController@index')->name('accountVerified');
Route::get('upload','productUploadController@index')->name('productUpload');
Route::get('order','orderPendingController@index')->name('orderPending');
Route::get('orderShipped','orderShippedController@index')->name('orderShipped');
