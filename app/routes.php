<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/login','UserController@getLogin');
Route::post('/login','UserController@postLogin');
Route::get('/register','UserController@getRegister');
Route::post('/register','UserController@postRegister');
Route::get('/logout','UserController@getLogout');
//Route::get('/{username}',['as'=> 'user.page', 'uses' => 'HomeController@userpage']);
Route::post('check-username','UserController@check_username');
Route::post('check-email','UserController@check_email');
Route::get('/','HomeController@getIndex');
Route::post('post/create','PostController@store');
Route::get('post/index','PostController@index');
//API for Post Controller
Route::resource('post','PostController');
//API for User Controller
Route::resource('user','UserController');
Route::get('user','UserController@index');
Route::group(array('prefix'=>'{username}'),function()
{
    Route::get("/post","PostController@getIndex");
    //Route::resource('post','PostController');
    Route::controller('backend', 'AdminController');
});
Route::group(array('prefix'=>'api'),function(){
    Route::resource('comments','CommentController');
});
// Route::filter('check-user',function(){
// 	if(Session::has('user')){
// 		$username = Session::get('username');
// 		if(Session[])
// 		return Redirect::to('')
// 	}
// });
// Route::group(['prefix' => $us'admin', 'before' => 'auth'], function () {
Route::get('{username}/admin', array('before' => 'check_admin', 'as' => 'user.admin', 'uses' => 'HomeController@useradmin' ))->where(array( 'username' => '[a-zA-Z0-9-_]+'));
//Route::get('post/{post_id}/comments','PostController@getComment');
//Route::post('post/{post_id}/comments','PostController@store');
Route::get('posts/demo',function()
{
    return View::make('post/demoComment');
});
Route::filter('check_admin', function() {
	$username = Request::segment(1); // Lay thong tin user tren Param
	if( !User::check_logged($username) ) {
		return Redirect::route('user.page', array('username' => $username));
		//die('Nothing to do');
	}
});
Route::get('/backend','AdminController@getDashBoard');
Route::controller('/backend', 'AdminController');
Route::resource("post.comments",'PostCommentController');
Route::controller('/post','PostController');
//App::missing(function($exception) {
//    return View::make('index');
//});

