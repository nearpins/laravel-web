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

	return Theme::view('index');
})->middleware('theme:default,layout');

Route::get('/login/{social}','Auth\LoginController@socialLogin')->where('social','twitter|facebook|linkedin|google|github|bitbucket|instagram');

Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')->where('social','twitter|facebook|linkedin|google|github|bitbucket|instagram');



Route::get('timezones/{timezone?}', 'packages\packagecreator\timezones\src\TimezonesController@index');



Auth::routes();


Route::get('/dashboard ', 'HomeController@index')->name('home');
Route::get('/setLang ', 'HomeController@setLang')->name('setLang');



Route::group(['middleware' => ['auth|LangSwith']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
});

Auth::routes();


Route::get('/testnow', function()
{
	$beautymail = app()->make(Snowfire\Beautymail\Beautymail::class);
    $beautymail->send('email.welcome', [], function($message)
    {
        $message
			->from('bar@example.com')
			->to('foo@example.com', 'John Smith')
			->subject('Welcome!');
    });

});


