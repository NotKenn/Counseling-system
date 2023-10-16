<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'home']);
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');


    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');

// User Routes
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
Route::resource('/users', App\Http\Controllers\RegisterController::class);
Route::get('users/destroy/{id}', [\App\Http\Controllers\RegisterController::class, 'destroy'])->name('users.destroy');
Route::resource('/noteInd', App\Http\Controllers\noteIndController::class);
Route::get('noteInd/destroy/{id}', [\App\Http\Controllers\noteIndController::class, 'destroy'])->name('noteInd.destroy');

//Students Route
Route::get('students', [\App\Http\Controllers\StudentsController::class, 'index'])->name('students.index');
Route::get('students/create-step-one', [\App\Http\Controllers\StudentsController::class, 'createStepOne'])->name('students.create-step-one');
Route::post('students/create-step-one-post', [\App\Http\Controllers\StudentsController::class, 'postcreateStepOne'])->name('students.create-step-one-post');
Route::get('students/create-step-two', [\App\Http\Controllers\StudentsController::class, 'createStepTwo'])->name('students.create-step-two');
Route::post('students/create-step-two-post', [\App\Http\Controllers\StudentsController::class, 'postCreateStepTwo'])->name('students.create-step-two-post');
Route::get('students/create-step-three', [\App\Http\Controllers\StudentsController::class, 'createStepThree'])->name('students.create-step-three');
Route::post('students/create-step-three-post', [\App\Http\Controllers\StudentsController::class, 'postCreateStepThree'])->name('students.create-step-three-post');
Route::get('students/create-step-final', [\App\Http\Controllers\StudentsController::class, 'createStepFinal'])->name('students.create-step-final');
Route::post('students/create-step-final-post', [\App\Http\Controllers\StudentsController::class, 'postCreateStepFinal'])->name('students.create-step-final-post');
Route::get('students/edit-step-one/{id}', [\App\Http\Controllers\StudentsController::class, 'editStepOne'])->name('students.edit-step-one');
Route::post('students/edit-step-one-post/{id}', [\App\Http\Controllers\StudentsController::class, 'postEditStepOne'])->name('students.edit-step-one-post');
Route::get('students/edit-step-two/{id}', [\App\Http\Controllers\StudentsController::class, 'editStepTwo'])->name('students.edit-step-two');
Route::post('students/edit-step-two-post/{id}', [\App\Http\Controllers\StudentsController::class, 'postEditStepTwo'])->name('students.edit-step-two-post');
Route::get('students/edit-step-three/{id}', [\App\Http\Controllers\StudentsController::class, 'editStepThree'])->name('students.edit-step-three');
Route::post('students/edit-step-three-post/{id}', [\App\Http\Controllers\StudentsController::class, 'postEditStepThree'])->name('students.edit-step-three-post');
Route::get('students/edit-step-final/{id}', [\App\Http\Controllers\StudentsController::class, 'editStepFinal'])->name('students.edit-step-final');
Route::post('students/edit-step-final-post/{id}', [\App\Http\Controllers\StudentsController::class, 'postEditStepFinal'])->name('students.edit-step-final-post');
Route::get('students/destroy/{id}', [\App\Http\Controllers\StudentsController::class, 'destroy'])->name('students.destroy');

Route::get('users', [App\Http\Controllers\SessionsController::class, 'index'])->name('users.index');
Route::resource('/user', \App\Http\Controllers\SessionsController::class);
