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
    return view('newHome');
});

// Route::get('/clients', function () {
//     return view('clients');
// });


Route::get('/client-list', 'ViewClientController@index');


Route::get('/gear-list', 'ViewGearController@index');

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Auth::routes();

// Route::get('/', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', function ()    {
        // Uses Auadminth Middleware
        return view('admin');

    });

    Route::get('/sliderPics', 'sliderPicsController@index');
    Route::get('/sliderPics/destroy/{request}', 'sliderPicsController@destroy');
    Route::post('/sliderPics/store','sliderPicsController@store');
    // ,[
    //     'as' => 'sliderPics.destroy',
    //     'uses' => 'sliderPicsController@destroy'
    // ]);

    // Route::get('/home', function ()    {
    //     // Uses Auadminth Middleware
    //     //return
    //     dd(redirect()->route('gear'));
    //
    //
    // });

    Route::resource('/clients', 'ClientController');

    // Route::get('/home/clients', function () {
    //     // Uses Auth Middleware
    // });
    Route::resource('/gear', 'GearController');

});
