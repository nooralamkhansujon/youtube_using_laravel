<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/profile/home','HomeController@home')->name('profile.home');
Route::get('/profile/profile','HomeController@profile')->name('profile.profile');
Route::get('/profile/channel','HomeController@channel')->name('profile.channel');
Route::get('/profile/about','HomeController@about')->name('profile.about');
Route::post('/profile/update','HomeController@profileUpdate')->name('profile.update');
Route::post('/channel/create','HomeController@createChannel')->name('channel.create');
Route::get('/profile/channels/','HomeController@channels')->name('profile.channel');

//channel
// Route::get('/details/video','HomeController@details')->name('video.details');
// Route::get('/channel','ChannelController@index')->name('channel.index');
