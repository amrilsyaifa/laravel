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


Route::get('/profile', 'AvatarController@profile')->name('profile');
Route::post('/profile', 'AvatarController@update_avatar');

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');


Route::group(['middleware' => 'admin'], function () {
    route::resource('admin', 'AdminController');
});



Route::group(['middleware' => 'dsu'], function () {
    Route::get('/dsu/dashboard', 'DsuController@index')->name('dsu');
});



Route::group(['middleware' => 'onb'], function () {
    Route::get('/onb/dashboard', 'OnbController@index')->name('onb');
});



// Route::group(['middleware' => 'tvdsu'], function () {
//     Route::get('/dsu-tv/dashboard', 'DsutvController@index')->name('dsu-tv');
// });



// Route::group(['middleware' => 'tvonb'], function () {
//     Route::get('/onb-tv/dashboard', 'OnbtvController@index')->name('onb-tv');
// });




Route::group(['middleware' => 'inputantrian'], function () {
    Route::get('/input-antrian/dashboard', 'InputantrianController@index')->name('input-antrian');
    Route::get('/input-antrian/foto/goride', 'InputantrianController@getfotogoride')->name('get-foto-goride');
    Route::post('/input-antrian/foto/goride', 'InputantrianController@getpostgoride')->name('get-post-goride');

    Route::get('/input-antrian/foto/gocar', 'InputantrianController@getfotogocar')->name('get-foto-goride');
    Route::post('/input-antrian/foto/gocar', 'InputantrianController@getpostgocar')->name('get-post-goride');
});
