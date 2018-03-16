<?php

use PhpJunior\LaravelVideoChat\Facades\Chat;

Route::get('/', function () {
	//$conversation = Chat::getConversationMessageById(1);
    //return view('welcome', compact('conversation'));
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
