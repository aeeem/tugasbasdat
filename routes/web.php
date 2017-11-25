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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/admin',function(){
	return view('admin.index');
})->middleware('admin');
Route::resource('admin/users','AdminUsersController')->middleware('admin');
Route::resource('admin/post','AdminPostController')->middleware('admin');
Route::resource('admin/tags','TagController')->middleware('admin');
Route::Delete('/destroy', [
    'uses' => 'MassDestroyer@destroy',
]);
// Route::get('/kepolisian',function(){
// 	return view('admin.kepolisian');



// });
