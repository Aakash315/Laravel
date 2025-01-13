<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CityCheck;
use App\Http\Controllers\DataController;
use App\Http\Controllers\User1Controller;
use App\Http\Controllers\User2Controller;
use App\Http\Controllers\LoginController;
use Illuminate\Types\Relations\Role;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\MailController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

Route::view('/about', 'about');

Route::controller(UserController::class)->group(function() {
    Route::get('user-home','userName');
    Route::get('user-welcome','userWelcome');
    Route::get('user-about','userAbout');
    Route::get('user-home1','userName1');
});

Route::get('user-about1',[UserController::class,'userAbout1']);

// for user-form
Route::view('user-form', 'user-form');
Route::post('adduser', [FormController::class, 'userData']);

// for user-form-2 
Route::view('user-form2', 'user-form2');
Route::post('adduser2', [FormController::class, 'userData2']);

// for user-form-3 
Route::view('user-form3', 'user-form3');
Route::post('adduser3', [FormController::class, 'userData3']);

// Route::view('demo', 'demo')->middleware('group1');
// Route::view('demo2', 'demo2')->middleware('group1');

Route::middleware('group1')->group(function(){
    Route::view('demo','demo');
    Route::view('demo2','demo2');
});

Route::view('demo3', 'demo3')->middleware(AgeCheck::class);

Route::view('demo-3', 'demo3')->middleware(CityCheck::class);

Route::get('users', [DataController::class, 'users']);

Route::get('user1', [User1Controller::class, 'getUser']);

Route::get('user2', [User1Controller::class, 'queries']);

Route::get('user3', [User2Controller::class, 'queries']);

Route::view('login', 'login');
Route::post('login', [LoginController::class, 'login']);

Route::view('upload', 'upload');
Route::post('upload', [UploadController::class, 'upload']);

Route::view('form', 'form');
Route::post('form', [User2Controller::class, 'add']);
Route::get('list', [User2Controller::class, 'list']);
Route::get('delete/{id}', [User2Controller::class, 'delete']);
Route::get('edit/{id}', [User2Controller::class, 'edit']);
Route::put('edit-student/{id}', [User2Controller::class, 'editstudent']); 
Route::get('search', [User2Controller::class, 'search']);
Route::post('delete-multi', [User2Controller::class, 'deleteMulti']);



Route::view('imgView', 'imgView');
Route::post('imgView', [ImageController::class, 'upload']);
Route::get('lists', [ImageController::class, 'display']);

Route::view('demohome', 'demohome');
Route::view('demoabout', 'demoabout');
Route::view('democontact', 'democontact');


Route::get('show', [SellerController::class, 'getData']);
Route::get('show-1', [SellerController::class, 'getData1']);
Route::get('show-2', [SellerController::class, 'getData2']);

Route::get('mail', [MailController::class, 'sendmail']);

Route::view('send-email', 'send-email');
Route::post('send-email', [MailController::class, 'sendmail']);