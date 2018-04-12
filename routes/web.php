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
    return view('splash');
});

// Route::get('/graphicd', function () {
//     return view('graphicd');
// });
//
// Route::get('/webd', function () {
//     return view('webd');
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/webd', 'WebsiteController@index');
Route::get('/graphicd', 'GraphicController@index');

Route::get('/contact', 'ContactController@show');
Route::post('/contact',  'ContactController@mailToAdmin');

Route::get('websites/{id}', 'WebsiteController@webProject');
