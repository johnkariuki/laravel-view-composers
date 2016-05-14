<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * pass an array to the 'foo' view
 * as a second parameter.
 */
Route::get('/foo', function () {
    return view('foo', ['key' => 'The big brown fox jumped over the lazy dog']);
});

/**
 * Pass a key variable to the 'foo view
 * using the compact method as
 * the second parameter.
 */
Route::get('/bar', function () {
    $key = 'If a would chuck can chuck wood,';
    return view('foo', compact('key'));
});

/**
 * Pass a key, value pair to the view
 * using the with method.
 */
Route::get('/baz', function () {
    return view('foo')->with('key', 'How much woood would a woodchuck chuck.');
});
