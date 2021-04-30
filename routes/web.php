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

Route::get('/user/password/change', 'User\ProfileController@showPasswordChangeForm')->name('show.user.password.change')->middleware('auth');
Route::post('/user/password/change', 'User\ProfileController@changeUserPassword')->name('change.user.password')->middleware('auth');

Route::get('/', 'User\WelcomeController@showWelcomePage')->name('welcome');
Route::get('/about', 'User\WelcomeController@aboutPage')->name('about');
Route::get('/committee','User\WelcomeController@committeePage')->name('committee');

Auth::routes(['verify' => true]); 

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
 
// All admin releted file located: 
Route::prefix('admin')->group(base_path('routes/admin.php')); 

// user profiel show,edit,update route 
Route::get('/show/user/profile', 'User\ProfileController@showUserProfile')->name('show.user.profile');
Route::get('/edit/user/profile', 'User\ProfileController@showProfileEditForm')->name('show.profile.edit.form');
Route::post('/update/user/profile', 'User\ProfileController@updateUserProfile')->name('update.user.profile');
Route::get('/user/verify/account/{id}', 'User\ProfileController@showAccountVerifyForm');
Route::post('/verify/user/account', 'User\ProfileController@verifyUserAccount')->name('verify.user.account');

// Viwe ex student batch wise
Route::get('/ex-student', 'User\WelcomeController@exStudent')->name('batchmenu');
Route::get('/batch/{year}', 'User\WelcomeController@batch');
Route::get('/message', 'User\WelcomeController@message');

// Notice 
Route::get('/notice', 'User\noticeController@index')->name('notice');
Route::get('/notice/{id}', 'User\noticeController@show');

// Event
Route::get('/event', 'User\eventController@index')->name('event');
Route::get('/event/{id}', 'User\eventController@show'); 