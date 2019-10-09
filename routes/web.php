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
use Faker\Generator as Faker;
use Illuminate\Http\Request;
// Route::get('/', function () {
//     return view('welcome');
// });
// route for user
Route::group(['prefix' => 'users','as' =>'users.',],function(){
    Route::get('/', 'UserController@index')->name('index');
    Route::view('/create' , 'users/create')->name('create');
    Route::post('/store', 'UserController@store')->name('store');
    Route::get('/edit/{id}','UserController@edit');
    Route::post('/update', 'UserController@update')->name('update');
    Route::post('/destroy/{id}','UserController@destroy')->name('destroy');
});
Route::group(['prefix' => 'posts','as' =>'posts.',],function(){
});
