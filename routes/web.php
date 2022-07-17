<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\TeamController;
use App\Http\Controller\AdminController;
use App\Http\Controller\ShowController;
 

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
//Text Editor
Route::post('editor', [TeamController::class, 'editor']);
//Login 
Route::get('login', [TeamController::class, 'login']);
Route::post('login1', [TeamController::class, 'login1']);

//Wrong Password
Route::get('wpass', [TeamController::class, 'wpass']);

//Notice UI
Route::get('notice', [NoticeController::class, 'notice']);
Route::get('details/{id}', [NoticeController::class, 'details']);

//Team UI
Route::get('team10', [TeamController::class, 'team10']);
Route::post('team11', [TeamController::class, 'img']);
Route::get('details100/{id}', [TeamController::class, 'team99']);
Route::get('deleteTeam/{id}', [NoticeController::class, 'deleteTeam']);
 
//Project UI
Route::get('project', [NoticeController::class, 'project']);
Route::get('editproject/{id}', [NoticeController::class, 'editproject']);

//ProjectDetailse UI
Route::get('projectdetailse/{id}', [NoticeController::class, 'projectdetailse']);

//Contact UI
Route::get('contact', [NoticeController::class, 'contact']);

//JoinWithUs UI
Route::get('join', [TeamController::class, 'join']);
Route::post('join1', [TeamController::class, 'join1']);

//Admin
Route::get('admin1', [NoticeController::class, 'admin1']);

//Admin Notice
Route::get('news', [NoticeController::class, 'news']);
Route::post('news1', [NoticeController::class, 'news1']);

//Admin Notice Edit
Route::get('edit/{id}', [NoticeController::class, 'edit']);
Route::get('editnews/{id}', [NoticeController::class, 'editnews']);
Route::put('update/{id}', [NoticeController::class, 'update']);

//Admin Notice Delete
Route::get('delete/{id}', [NoticeController::class, 'delete']);
Route::get('delete1/{id}', [NoticeController::class, 'delete1']);

 
//Project Admin
Route::get('project2', [NoticeController::class, 'project2']);
Route::post('project1', [NoticeController::class, 'project1']);

//Admin Team
Route::get('team',[NoticeController::class, 'team']);
//Edit Team
Route::get('editteam/{id}', [NoticeController::class, 'editteam']);


//Team member delete
Route::get('tmDelete', [NoticeController::class, 'team']);

//AdminHome
Route::get('adminhome', [NoticeController::class, 'adminhome']);