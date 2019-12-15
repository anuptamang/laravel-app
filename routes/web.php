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

Route::get('/', 'PagesCOntroller@index');
Route::get('/about', 'PagesCOntroller@about');
Route::get('/services', 'PagesCOntroller@services');

// Route::get('/users/{id}', function ($id) {
//     return 'This is user '.$id;
// });

// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return 'This is user '.$name. 'with a id of'. $id;
// });
