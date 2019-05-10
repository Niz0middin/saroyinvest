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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/xamza', function () {
    return view('xamza');
});
Route::get('/wh', function () {
    return view('wh');
});
Route::get('/mevazor', function () {
    return view('mevazor');
});
Route::get('/algoritm', function () {
    return view('algoritm');
});
Route::get('/algoritmnew', function () {
    return view('algoritmnew');
});
Route::resource('posts', 'PostsController');
Route::resource('/', 'PagesController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

