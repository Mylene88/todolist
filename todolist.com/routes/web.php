<?php
use App\Http\Controllers\UsersController;
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

Route::get('/', 'WelcomeController@index');

// Authentication routes.
Auth::routes();

Route::get('/tasks', 'TasksController@index')->name('home');
Route::get('users/profile', 'UserController@edit')->name('users.edit-profile');
Route::post('users/profile', 'UserController@update')->name('users.update-profile');
//Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);
Route::get('users', 'UserController@index');
Route::post('users', 'UserController@store')->name('change.password');
Route::post('/tasks', 'TasksController@store');
Route::delete('/tasks/{task}', 'TasksController@destroy');
Route::patch('/tasks/{task}', 'TasksController@toggleDoneStatus');