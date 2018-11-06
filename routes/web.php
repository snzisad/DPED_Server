<?php

	// Route::get('/', 'LoginController@LoginForm')->name('login');
	Route::get('/signin', 'LoginController@LoginForm')->name('login');

	Route::get('/', 'dpedController@homepage')->middleware('auth');

	// Route::post('/signin', 'LoginController@login');
	Route::get('/logout', 'LoginController@signout');

	Auth::routes();

	Route::group(['middleware' => 'auth'], function()
	{
	    Route::resource('dped','dpedController');
	});

	Route::get('/home','dpedController@index')->middleware('auth');

	Route::get('/folder/{id}','dpedController@show')->middleware('auth');

	Route::get('/view/{id}','dpedController@showFile')->middleware('auth');

	Route::get('/update/{type}/{id}/{name}','dpedController@update');

	Route::get('/delete/{id}/{type}','dpedController@destroy');

	Route::get('/paste/{id}/{type}/{root}','dpedController@paste');

	Route::get('/newFolder/{id}/{name}','dpedController@newFolder');

	Route::post('/newFile',['uses'=>'dpedController@newFile', 'as' => 'fileUpload'])->middleware('auth');

	Route::post('/updateFile',['uses'=>'dpedController@updateFile', 'as' => 'fileUpdate'])->middleware('auth');

	// Route::get('/files/{filename}', function ($filename)
	// {
	//     $path = storage_path("app".DIRECTORY_SEPARATOR."public".DIRECTORY_SEPARATOR."files".DIRECTORY_SEPARATOR.$filename);

	//     if (!File::exists($path)) {
	//         abort(404);
	//     }

	//     $file = File::get($path);
	//     $type = File::mimeType($path);

	//     $response = Response::make($file, 200);
	//     $response->header("Content-Type", $type);
	    
	//     return $response;
	// });


	Route::get('/files/{filename}','dpedController@viewFile')->middleware('auth');
	
	Route::get('/homeAPI','APIController@home');
	Route::get('/viewFolder/{id}','APIController@viewFolder');