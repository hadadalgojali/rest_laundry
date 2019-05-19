<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::group(['prefix'  => 'pages'], function(){
  Route::get('/master', function () {
      return view('pages/master-data/index');
  });

  Route::get('/users', function () {
      return view('pages/users/index');
  });

  Route::get('/class', function () {
      return view('pages/class/index', ['title'=>"Class",'class'=>"class"]);
  });

  Route::get('/api_key', function () {
      return view('pages/api_key/index');
  });
});
