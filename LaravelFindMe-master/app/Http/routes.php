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

/**
 * Lost Items routes
 */
Route::resource('lost', 'LostItemController');

/**
 * Marking items found
 */
Route::get('found/{id}', 'FoundController@foundView');
Route::post('found/{id}', 'FoundController@markFound');

