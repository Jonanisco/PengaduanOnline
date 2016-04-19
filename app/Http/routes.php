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



//Route::get('Login', 'Auth\AuthController@getLogin');

//Route::post('Login', 'Auth\AuthController@postLogin');



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

Route::group(['middleware' => ['auth']], function () {
    
	Route::get('Dasboard/Home', array('as' => 'Home', function(){
			return View('Dasboard.Home');
	}));

	

	

});

Route::group(['middleware' => ['web']], function () {
    
    Route::get('/', function () {
    return view('visitor.welcome');
});

    Route::post('/signup', [
		'uses' => 'UserController@postSignUp',
		'as' => 'signup'		
		]);

Route::get('/kerusakanjalan', [
	'uses' => 'PostController@getHalamanKerusakanJalan',
	'as' => 'kerusakanjalan',
	'middleware' => 'auth'
]);

Route::get('/404Notfound', array('as' => 'notFound', function(){
			return View('errors.404');
	}));

 


Route::get('Admin', 'HomeAdminController@LoginAdmin')->name('Admin');




Route::post('/signin', [
	'uses' => 'UserController@postSignIn',
	'as' => 'signin'
	]);

Route::get('/logout', [
	'uses' => 'UserController@getLogout',
	'as' => 'logout'
	]);

	Route::get('/dasboard', [
	'uses' => 'PostController@getDasboard',
	'as' => 'dasboard',
	'middleware' => 'auth'
	]);

Route::post('/createdpost', [
	'uses' => 'PostController@CreatePost',
	'as' => 'post.created',
	'middleware' => 'auth'
	]);

Route::get('/Delete-post/{post_id}', [
	'uses' => 'PostController@DeletePost',
	'as' => 'post.delete',
	'middleware' => 'auth'
	]);

//----- Route untuk Edit Artikel -------//

Route::post('/EditJudul', [
	'uses' => 'PostController@EditJudul',
	'as' => 'post.update.judul',
	'middleware' => 'auth'
	]);
Route::post('/EditKategori', [
	'uses' => 'PostController@EditKategori',
	'as' => 'post.update.kategori',
	'middleware' => 'auth'
	]);
Route::post('/EditGambar', [
	'uses' => 'PostController@EditGambar',
	'as' => 'post.update.gambar',
	'middleware' => 'auth'
	]);
Route::post('/EditIsi', [
	'uses' => 'PostController@EditIsi',
	'as' => 'post.update.isi',
	'middleware' => 'auth'
	]);

//----- END Route untuk Edit Artikel -------//

Route::get('/GambarArtikel/{namaGambar}', [
	'uses' => 'PostController@getGambar',
	'as' => 'artikel.gambar',
	'middleware' => 'auth'
	]);

Route::get('/Admin/Artikel/Detail-{post_id}', [
	'uses' => 'PostController@getDetailArtikel',
	'as' => 'Artikel.Detail',
	'middleware' => 'auth'
	
	]);

Route::get('/Admin/Artikel/Edit-{post_id}', [
	'uses' => 'PostController@getEditArtikel',
	'as' => 'Artikel.Edit',
	'middleware' => 'auth'

	]);



});
