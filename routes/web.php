<?php

Route::get('/', 'TestController@index')->name('index'); //главная

//регистрация
Route::post('/', 'RegistrationController@create')->name('create');

//авторизация
Route::post('/login', 'AuthController@login')->name('login');


//страницы
//Route::get('/profile', 'TestController@profile');
//Route::get('/startTest', 'TestController@startTest');
//Route::get('/endTest', 'TestController@endTest');
