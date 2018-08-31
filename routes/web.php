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

/**-----------------------------------------------------------------------
Frontend
-----------------------------------------------------------------------**/
Route::get('/','Frontend\Home@homePage');
Route::get('/our-team','Frontend\Home@ourTeam');
Route::get('/annual-reports','Frontend\Home@annualReports');
Route::get('/our-board','Frontend\Home@ourBoard');
Route::get('/our-story','Frontend\Home@ourStory');