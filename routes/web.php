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

Route::get('/', 'HomeController@index');
Route::get('/video', function () {
    return view('clients/video');
});
Route::get('/video-detail', function () {
    return view('clients/video-detail');
});
Route::get('/forum', function () {
    return view('clients/forum');
})->middleware('auth.basic');

Route::get('/booking', function () {
    return view('clients/booking');
});
Route::get('/booking', 'BookingController@index');
Route::get('/booking/{step}', 'BookingController@show');
Route::get('/nextstep','BookingController@indexaddress');
Route::post('/nextstep','BookingController@store');
Route::get('/review','CheckoutController@index');
Route::post('/review','CheckoutController@store');

Route::get('/service', 'HomeController@serviceindex');
Route::get('/service/{name}', 'HomeController@servicedetail');
Route::get('/cart', function () {
    return view('clients/cart');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/redirect/{social}', 'SocialAuthController@redirect');
Route::get('/callback/{social}', 'SocialAuthController@callback');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
