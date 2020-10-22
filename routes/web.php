<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MainController@home')->name('home_page');

Route::get('/contact', 'MainController@contact')->name('contact_page');

Route::get('/games', 'MainController@games')->name('games_page');

Route::get('/game detail', 'MainController@gameDetail')->name('game_detail_page');

Route::get('/news', 'MainController@news')->name('news_page');

Route::get('/news detail', 'MainController@newsDetail')->name('news_detail_page');

Route::get('/jobs', 'MainController@jobs')->name('jobs_page');