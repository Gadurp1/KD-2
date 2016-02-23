<?php

/*
|-------------------------------------------------------------------------
| Static Routes
|--------------------------------------------------------------------------
*/
Route::get('track', 'WebTrackController@index');

// Sitemap
Route::get('/sitemap', function()
{
   return Response::view('sitemap')->header('Content-Type', 'application/xml');
});
Route::get('contact',
  ['as' => 'contact', 'uses' => 'AboutController@create']);
// Email Contact Route
Route::post('contact',
  ['as' => 'contact_store', 'uses' => 'AboutController@store']);
// Main index route
Route::get("/", function(){
  return view('pages.index');
});
Route::get("theatre", function(){
  $photo=\App\Image::latest()->take(1)->lists('url');
  return view('images.theatre')->with('photo',$photo);
});

/*
|-------------------------------------------------------------------------
| App Routes
|--------------------------------------------------------------------------
*/
//  Blog Routes
Route::get('post', 'PostController@index');

Route::get('admin/post', 'PostController@index');
Route::get('Cat-Gifs', 'ImageController@index');
Route::get('Cat-Gifs/{id}', 'ImageController@show');
Route::get('api/posts', function()
{
  $posts=\App\Post::where('status','publish')->latest()->get();
  return $posts;
});
Route::get('post/{slug}', 'PostController@show');
// Coupon Routes
Route::get('cases', 'CouponsController@index');
Route::get('cases/{slug}', 'CouponsController@show');
// Page Routes
Route::get('pages/{slug}', 'PagesController@show');

/*
|-------------------------------------------------------------------------
| Admin  Routes
|--------------------------------------------------------------------------
*/
Route::get('admin', 'AdminController@index');
Route::get('home', 'AdminController@index');
$router->group([
  'middleware' => 'auth',
], function () {
  resource('admin/photos',  'ImageController');
  resource('admin/post',  'PostController');
  resource('admin/Banners', 'BannerController');
  resource('admin/pages', 'PagesController');
  resource('admin/cases', 'CouponsController');
  resource('admin/users', 'UserController');
});
/*
|-------------------------------------------------------------------------
| Authentication  Routes
|--------------------------------------------------------------------------
*/
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

/*
|-------------------------------------------------------------------------
| Registration  Routes
|--------------------------------------------------------------------------
*/
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
