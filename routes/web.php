<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', HomeController::class . '@index')->name('home');


Route::get('/chat', function () {
    return view('chat');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/userdashboard', function () {
    return view('userdashboard');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/drive', function () {
    return view('drive');
});
Route::get('/project/file', function () {
    return view('project_file');
});
