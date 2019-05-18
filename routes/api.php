<?php

use App\Users;
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
/*
Route::get('Users/{parameter}', function($parameter){
  // return Users::find($first_name);
  // return Users::where('first_name', $first_name)->get();
  return Users::where('id', $parameter)
  ->orWhere('first_name', $parameter)
  ->orWhere('last_name', $parameter)
  ->get();
});

Route::get('Users', function(){
  return Users::all();
});

Route::post('Users', function(){
  $parameter = array();
  $parameter = request()->all();
  $parameter['id'] = (int)Users::all()->last()->id + 1;
  Users::create($parameter);
  return $parameter;
});

Route::delete('Users/{id}', function(Users $id){
  $id->delete();
  return array(
    'id'  => $id->id,
    'code'=> 200,
  );
});
*/
Route::group(['prefix'  => 'v1'], function(){
  Route::resource('Users', 'UsersController', [
    'except'   => ['destroy', 'create']
  ]);

  Route::post('/Users/create', [
    'uses'  => 'UsersController@create'
  ]);

  // Route::get('/users/data', [
  //   'uses'  => 'UsersController@show'
  // ]);
});
