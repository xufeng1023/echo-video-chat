<?php

use App\Events\UserSignedUp;
use PhpJunior\LaravelVideoChat\Facades\Chat;

Route::get('/', function () {
	//event(new UserSignedUp);
	$conversation = Chat::getConversationMessageById(10);
    return view('welcome', compact('conversation'));
    //return view('welcome');
});

Route::get('/video', function() {
	return view('video');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
