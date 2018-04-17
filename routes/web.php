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

//--------MAIN ROUTES--------//

Route::get('/', function () {
    return view('splash');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/webProjects', 'WebsiteController@index');
Route::get('/graphicProjects', 'GraphicController@index');

//--------PROJECT PAGE ROUTES--------//

Route::get('webProjects/{id}', 'WebsiteController@webProject');
Route::get('graphicProjects/{id}', 'GraphicController@graphicProject');

//--------WEB PROJECT ROUTES--------//

Route::get('/avix', function () {
    return view('webDesign.webProjects.avix.avixHome');
});
Route::get('/avix/about', function () {
    return view('webDesign.webProjects.avix.avixAbout');
});
Route::get('/avix/products', function () {
    return view('webDesign.webProjects.avix.avixProducts');
});
Route::get('/avix/contact', function () {
    return view('webDesign.webProjects.avix.avixContact');
});
Route::get('/calculator', function () {
    return view('webDesign.webProjects.calculator.calculatorApp');
});

Route::get('/weather', function () {
    return view('webDesign.webProjects.weather.weatherApp');
});

//--------GRAPHIC PROJECT ROUTES--------//

// Route::get('/contact', 'ContactController@show');
// Route::post('/contact',  'ContactController@mailToAdmin');
