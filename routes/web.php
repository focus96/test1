<?php

Route::get('/', 'TestController@index')->name('index'); //главная

//регистрация
Route::post('/', 'RegistrationController@create')->name('create');

//авторизация
Route::post('/login', 'AuthController@login')->name('login');

Route::resource('books', 'BooksController');


//страницы
//Route::get('/profile', 'TestController@profile');
//Route::get('/startTest', 'TestController@startTest');
//Route::get('/endTest', 'TestController@endTest');


Route::get('/post', "PostController")->name('post');

Route::get('/someNewRoute', 'SomeNewController@method')->name('someNewRoute');

