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
    return view('blog.index');
})->name('/');

Route::get('/about', function () {
    return view('blog.about');
})->name('about');

Route::get('/post', function () {
    return view('blog.post');
})->name('post');

Route::get('/contact', function () {
    return view('blog.contact');
})->name('contact');

Route::get('/about, AboutController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
