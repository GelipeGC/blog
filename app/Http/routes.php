<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Rutas del FrontEnd

/*Route::get('/', ['as' => 'front.index', function () {
    return view('front.index');
}]);*/
Route::get('/', [
	'as' => 'front.index',
	'uses' => 'FrontController@index'
	]);


//Rutas del panel de Administracion
 Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
 	Route::get('/', ['as' => 'admin.index', function () {
    return view('admin.index');
}]);

 	Route::resource('users','UsersController');
 	Route::get('users/{id}/destroy',[
 		'uses' => 'UsersController@destroy',
 		'as' => 'admin.users.destroy'
 		]);

 	Route::resource('categories', 'CategoriesController');
 	Route::get('categories/{id}/destroy', [
 		'uses' => 'CategoriesController@destroy',
 		'as' => 'admin.categories.destroy'
 		]);
 	Route::resource('tags', 'TagsController');
 	Route::get('tags/{id}/destroy', [
 		'uses' => 'TagsController@destroy',
 		'as' => 'admin.tags.destroy'
 		]);
 	Route::resource('articles', 'ArticlesController');
 	Route::get('articles/{id}/destroy', [
 		'uses' => 'ArticlesController@destroy',
 		'as' => 'admin.articles.destroy'
 		]);
 	Route::get('images', [
 		'uses' => 'ImagesController@index',
 		'as' => 'admin.images.index'
 		]);
 	Route::get('admin/users/profile', 'UserController@profile');
Route::post('admin/users/updateprofile', 'UserController@updateProfile');
 });

 Route::get('admin/auth/login',[
 	'uses' => 'Auth\AuthController@getLogin',
 	'as'   => 'admin.auth.login'
 	]);
 Route::post('admin/auth/login', [
 	'uses' => 'Auth\AuthController@postLogin',
 	'as' => 'admin.auth.login'
 	]);
 Route::get('admin/auth/logout', [
 	'uses' =>'Auth\AuthController@logout',
 	'as' =>'admin.auth.logout'
 	]);
/*Route::get('users/profile', [
	'uses'  => 'UserController@profile',
	'as'	=> 'admin.users.profile'

	]);
Route::post('users/updateprofile',[
	'uses' => 'UserController@updateProfile',
	'as'	=> 'admin.users.updateprofile'
	]);*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
