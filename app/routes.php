<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */
Blade::setContentTags('<%', '%>');   // for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>');  // for escaped data

Route::get('/', function() {
    return View::make('maths.index');
});

Route::group(array('prefix' => 'api'), function() {

    Route::resource('maths', 'MathsController', array('only' => array('index', 'store', 'destroy')));
});
