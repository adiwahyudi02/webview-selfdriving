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

Auth::routes();

// Route::get('/chall', 'HomeController@index')->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');


Route::get('/dashboardAdmin', function(){
    return 'dashboardAdmin';
})->middleware(['role','auth']);



Route::get('/', function () {
    return view('welcome');
});
Route::get('/feed', function () {
    return view('feed');
})->name('feed')->middleware('auth');

Route::get('/challenges', function () {
    return view('challenges');
})->name('challenges')->middleware('auth');

Route::get('/explore', function () {
    return view('explore');
})->name('explore')->middleware('auth');

Route::get('/search', function () {
    return view('search');
})->name('search')->middleware('auth');

Route::get('/achievement', function () {
    return view('achievement');
})->name('achievement')->middleware('auth');

Route::get('/splash', function () {
    return view('splash');
})->name('splash')->middleware('auth');

Route::get('/following', function() {
    return view('following');
})->name('following')->middleware('auth');

Route::get('/followers', function() {
    return view('followers');
})->name('followers')->middleware('auth');

Route::get('/notification', function() {
    return view('notification');
})->name('notification')->middleware('auth');

Route::get('/edit/profile', function(){
    return view('edit-profile');
})->name('editProfile')->middleware('auth');

Route::get('/createChallenges', function(){
    return view('create-challenges');
})->name('create-challenges')->middleware('auth');


Route::resource('/challenge','ChallengesController')->middleware('auth');
