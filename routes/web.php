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
Route::get('/', ['uses'=>'Welcome_Controller@welcome'] );
Route::get('post/{id}', 'Welcome_Controller@show');
Route::get('/cobain/{id}',['uses'=>'DownloadController@download']);
Auth::routes();
Route::resource('/buron','BuronController');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('user/posts', 'UserPostController' )->middleware('auth');
Route::resource('user/laporan', 'UserLaporanController' )->middleware('auth');

//laporan

Route::get('/admin',function(){
	return view('admin.index');
})->middleware('admin');
Route::resource('admin/users','AdminUsersController')->middleware('admin');
Route::resource('admin/post','AdminPostController')->middleware('admin');
Route::resource('admin/tags','TagController')->middleware('admin');
Route::resource('admin/kantor','KantorPolisiController')->middleware('admin');
Route::resource('admin/kejadian','AdminKejadian',['except' => ['create', 'show',]])->middleware('admin');
Route::resource('admin/terima', 'AdminTerimaLaporan',['only'=>['index','show','update','destroy']])->middleware('admin');

// Route::get('/kepolisian',function(){
// 	return view('admin.kepolisian');



// });
