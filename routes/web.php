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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'LotteryController@index');

Route::get('/lottery/create', [
    'as'   => 'lottery.create',
    'uses' => 'LotteryController@create'
]);

//Route::resource('/lottery', 'LotteryController');
