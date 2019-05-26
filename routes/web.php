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
      $url = "ws.laundry.goyangpensil.com/api/v1/";
      return view('pages/users/index', ['title'=>"Users",'class'=>"user", 'url'=> $url]);
  });

  Route::get('/class', function () {
      $url = "ws.laundry.goyangpensil.com/api/v1/";
      return view('pages/class/index', ['title'=>"Class",'class'=>"class", 'url'=> $url]);
  });

  Route::get('/items', function () {
      $url = "ws.laundry.goyangpensil.com/api/v1/";
      return view('pages/items/index', ['title'=>"Items",'class'=>"items", 'url'=> $url]);
  });

  Route::get('/outlet', function () {
      $url = "ws.laundry.goyangpensil.com/api/v1/";
      return view('pages/outlet/index', ['title'=>"Outlet",'class'=>"outlet", 'url'=> $url]);
  });

  Route::get('/customer', function () {
      $url = "ws.laundry.goyangpensil.com/api/v1/";
      return view('pages/customer/index', ['title'=>"Customer",'class'=>"customer", 'url'=> $url]);
  });

  Route::get('/product', function () {
      $url = "ws.laundry.goyangpensil.com/api/v1/";
      return view('pages/product/index', ['title'=>"Product",'class'=>"product", 'url'=> $url]);
  });

  Route::get('/api_key', function () {
      return view('pages/api_key/index');
  });
});
