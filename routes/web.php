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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Routes

Route::middleware(['auth'])->group(function() {
    // roles.
  Route::post('roles/store', 'RoleController@store')->name('roles.store');


  Route::get('roles', 'RoleController@index')->name('roles.index');


  Route::get('roles/create', 'RoleController@create')->name('roles.create');


  Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
          ;

  Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
         ;

  Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
         ;

  Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
          ;


    // product.
  Route::post('products/store', 'ProductController@store')->name('products.store');

  Route::get('products', 'ProductController@index')->name('products.index');

  Route::get('products/create', 'ProductController@create')->name('products.create')
   ;

  Route::put('products/{product}', 'ProductController@update')->name('products.update')
    ;

  Route::get('products/{product}', 'ProductController@show')->name('products.show');

  Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy') ;

  Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit');

    // users.
  Route::get('users', 'UserController@index')->name('users.index');

  Route::put('users/{user}', 'UserController@update')->name('users.update');

  Route::get('users/{user}', 'UserController@show')->name('users.show');


  Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');


  Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
    ;
});


