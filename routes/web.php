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

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    // Ignores notices and reports all other kinds... and warnings
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}

Route::get('/', 'PageController@index');

// Route::get('/clients', function () {
//     return view('clients');
// });


Route::get('/artist-list', 'ViewClientController@index');


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
Route::get('home', function ()    {
    // Uses Auadminth Middleware
    return view('admin');

});

Route::group(['prefix' => '/admin'], function () {



    Route::get('sliderPics', 'sliderPicsController@index');
    Route::get('sliderPics/destroy/{request}', 'sliderPicsController@destroy');
    Route::post('sliderPics/store','sliderPicsController@store');
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

    Route::resource('artists', 'ClientController');

    Route::resource('pageContent', 'PageContentController');

    Route::resource('roles', 'RoleController');

    // Route::get('/home/clients', function () {
    //     // Uses Auth Middleware
    // });
    Route::resource('gear', 'GearController');

    

});
});

