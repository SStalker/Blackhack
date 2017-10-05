<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*
  Authentication routes
 */
Auth::routes();

/*
  Startroute to homepage
 */
Route::get('/','StartController@getIndex');

/*
  Restful routes for posts
 */
Route::resource('posts', 'PostController');

/*
  Queryroute for the searchbar in the nav
 */
Route::get('search', 'SearchController@search');

/*
  Routes for the BudgetController
 */
Route::resource('accountings', 'AccountingController');

/*
  Static Sites
*/

$static_sites = ['contact', 'toy_wars', 'asteroids', 'drolraw', 'evos', 'laguna', 'wlan-scanner', 'mas', 'hacking-under-friends', 'wpa2-crack'];

foreach ($static_sites as $site) {
	Route::get($site, function() use($site){
		return View::make($site);
	});
}
