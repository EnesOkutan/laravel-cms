<?php

use App\Department;

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

Route::get('/', function(){
	return view('auth.login');
})->middleware('check.auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('check.role');
Route::resource('posts','PostController')->middleware('auth');

Route::middleware(['auth','check.manager'])->group(function(){
	
	Route::get('/admin/dashboard',function(){
		return view('admin.dashboard');
	});
	
	Route::get('/admin/posts','AdminController@allPosts');
	Route::get('/admin/departments','AdminController@allDepartments');
	Route::get('/admin/managers','AdminController@allManagers');
	Route::get('/admin/roles','AdminController@allRoles');
	Route::get('/admin/workers','AdminController@allWorkers');

	Route::get('/admin/create/post','AdminController@getCreatePost');
	Route::get('/admin/create/department','AdminController@getCreateDepartment');
	Route::get('/admin/create/manager','AdminController@getCreateManager');
	Route::get('/admin/create/role','AdminController@getCreateRole');
	Route::get('/admin/create/worker','AdminController@getCreateWorker');

	Route::post('/admin/store/post','PostController@store');
	Route::post('/admin/store/department','DepartmentController@store');
	Route::post('/admin/store/manager','ManagerController@store');
	Route::post('/admin/store/role','RoleController@store');
	Route::post('/admin/store/worker','WorkerController@store');

});

