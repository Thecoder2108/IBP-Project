<?php

use Illuminate\Support\Facades\Route;
use App\Models\Teacher;
use App\Models\classroom;
use Illuminate\Support\Facades\RoleChecker;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\UserController;


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









 Route::group(['prefix'=>'dashboard', 'as' => 'admin.','middleware'=>'auth'],function(){
 Route::resource('/table_student',StudentController::class);
 Route::resource('/table_teacher',TeacherController::class)->middleware('roleChecker:teacher');
  Route::resource('/table_courses',CoursesController::class);
  Route::resource('/coursesadd',CoursesController::class);
  Route::resource('/studentadd',StudentController::class);
  Route::resource('/teacheradd',TeacherController::class);
  Route::resource('/classesadd',ClassroomController::class);
  Route::resource('/register',TeacherController::class);
  Route::resource('/user-management', UserController::class);




 });
 Route::get('/index',[PageController::class,'index']);
 Route::get('/classes',[PageController::class,'classes']);
 Route::get('/about',[PageController::class,'about']);
 Route::get('/blog',[PageController::class,'blog']);
 Route::get('/contact',[PageController::class,'contact']);
 Route::get('/teacher',[PageController::class,'teacher']);
 Route::get('/student',[PageController::class,'student']);










use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;


Route::get('/', function () {return redirect('sign-in');})->middleware('guest');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');
Route::get('verify', function () {
	return view('sessions.password.verify');
})->middleware('guest')->name('verify');
Route::get('/reset-password/{token}', function ($token) {
	return view('sessions.password.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('sign-out', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');
Route::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
Route::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
	Route::get('billing', function () {
		return view('pages.billing');
	})->name('billing');
	Route::get('tables', function () {
		return view('pages.tables');
	})->name('tables');
	Route::get('rtl', function () {
		return view('pages.rtl');
	})->name('rtl');
	Route::get('virtual-reality', function () {
		return view('pages.virtual-reality');
	})->name('virtual-reality');
	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');
	Route::get('static-sign-in', function () {
		return view('pages.static-sign-in');
	})->name('static-sign-in');
	Route::get('static-sign-up', function () {
		return view('pages.static-sign-up');
	})->name('static-sign-up');

	Route::get('user-profile', function () {
		return view('pages.laravel-examples.user-profile');
	})->name('user-profile');
});
