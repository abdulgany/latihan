<?php

Route::bind('task', function($value, $route) {
	return Item::where('id', $value)->first();
});

Route::get('/', array('as' => 'home',  'uses' => 'HomeController@getIndex'))->before('auth');
Route::post('item', array('uses' => 'HomeController@postIndex'))->before('csrf');

Route::get('/new', array('as' => 'new', 'uses' => 'HomeController@getNew'));
Route::post('/new', array('uses' => 'HomeController@postNew'))->before('csrf');

Route::get('/delete/{task}', array('as' => 'delete', 'uses' => 'HomeController@getDelete'));

Route::get('/update/{task}', array('as' => 'update', 'uses' => 'HomeController@getUpdate'));
Route::post('/update', array('uses' => 'HomeController@postUpdate'))->before('csrf');

Route::get('login', array('as' => 'login', 'uses' => 'AuthController@getlogin'))->before('guest');
Route::post('login', array('uses' => 'AuthController@postlogin'))->before('csrf');
