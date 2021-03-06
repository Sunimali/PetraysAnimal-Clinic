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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function()
{

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/Candidate', function () {
    return view('Candidate');
});

Route::get('/Client', function () {
    return view('Client');
});

Route::get('/Candidate_call', function () {
    return view('Candidate_call');
});

Route::get('/Candidate_history', function () {
    return view('Candidate_history');
});

Route::get('/Candidate_other', function () {
    return view('Candidate_other');
});

Route::get('/Candidate_Reference', function () {
    return view('Candidate_Reference');
});

Route::get('/Client_call', function () {
    return view('Client_call');
});

Route::get('/Client_contacts', function () {
    return view('Client_contacts');
});

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/Candidate_List', function () {
    return view('Candidate_List');
});

Route::get('/Client_List', function () {
    return view('Client_List');
});


    Route::get('/cal', function () {
        return view('cal');
    });


});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/addstock', function () {
//     return view('addstock.addstock');
// });

//This Route Will be Provide addstock Routes
Route::resource('addstock', 'addstockController');


Route::resource('viewstock', 'viewstockController');


// Route::get('charts', 'ChartController@index')->name('chart');
Route::resource('charts', 'ChartController');


