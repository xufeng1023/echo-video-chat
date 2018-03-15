<?php

use PhpJunior\LaravelVideoChat\Facades\Chat;
use App\Events\UserSignedUp;
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
	//event(new UserSignedUp);
	$conversation = Chat::getConversationMessageById(10);
    return view('welcome', compact('conversation'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
