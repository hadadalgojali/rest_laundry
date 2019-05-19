<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
  //
  // Route::middleware('auth:api')->get('/user', function(Request $request) {
  //     return $request->user();
  // });

Route::group(['prefix'  => 'v1'], function(){
  // ================ API USERS
  Route::resource('Users', 'UsersController', [
    'except'   => ['edit', 'create']
  ]);

  Route::post('/Users/create', [
    'uses'  => 'UsersController@create'
  ]);

  // ================ API AUTH
  Route::post('/Auth/signin', [
    'uses'  => 'AuthController@login'
  ]);

  Route::get('/Auth/signout/{id}', [
    'uses'  => 'AuthController@logout'
  ]);

  // ================ API CLASS
  Route::resource('Class', 'ClassController', [
    'except'   => ['edit', 'create']
  ]);

  Route::post('/Class/create', [
    'uses'  => 'ClassController@create'
  ]);
});
