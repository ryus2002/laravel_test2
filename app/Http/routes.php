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

use App\Http\Controllers\HomeController;

Route::get('/', 'Controller@welcome');

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/printarea', 'Controller@printarea');
Route::post('/printarea', 'printareaController@index');
Route::post('/subcooke', 'subcookeController@index');
//Route::controller('printarea', 'printareaController');

Route::resource('welcome', 'welcomeController');

Route::resource('search', 'searchController');

Route::resource('store', 'storeController');

// Route::get('/welcome', 'Controller@welcome');
// // Route::get('/welcome', [
// //     'as' => 'Welcome', function () {
// //         return App::make(HomeController::class)->index('Welcome');
// //     }
// // ]);


Route::get('/helloworld', [
    'as' => 'HelloWorld', function () {
        return App::make(HomeController::class)->index('HelloWorld');
    }
]);

// Route::get('/search', function () {
// 	DB::insert('insert into posts(title,content) values(?, ?)',['最新消息','這是一則勁爆的消息']);
//     return view('search');
// });