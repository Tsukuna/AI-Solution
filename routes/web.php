<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\Auth\AccountController;
use App\Http\Controllers\Auth\ForgetPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\OtpController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\ResponseController;
use App\Http\Middleware\AdminMiddleWare;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('home',[AppController::class,'home'])->name('home');;
Route::get('blog',[AppController::class,'blog'])->name('blog');
Route::get('about',[AppController::class,'about'])->name('about');
Route::get('industry',[AppController::class,'industry'])->name('industry');
Route::get('event',[AppController::class,'event'])->name('event');

Route::resource('feedback',ResponseController::class);

Route::get('feedback-dashboard',[ResponseController::class,'feedbackDashboard'])->name('feedbackDashboard');

Route::resource('/contact', ContactController::class);
Route::get('/blog/search', [BlogController::class,'search'])->name('blog.search');
Route::resource('create/blog',BlogController::class);


Route::get('user/search/title',[DashBoardController::class,'searchJobTitle'])->name('job_title.search');
Route::get('user/search/country',[DashBoardController::class,'searchCountry'])->name('country.search');
Route::get('user/search/date',[DashBoardController::class,'searchDate'])->name('date.search');
Route::get('user/search/status',[DashBoardController::class,'searchStatus'])->name('status.search');
Route::get('form/export',[DashBoardController::class,'exportCSV'])->name('form.export');
// Route::resource('/dashboard', DashBoardController::class);




Route::group(['middleware' => 'auth'],function(){
    Route::get('login-with-otp',[OtpController::class,'loginOtp'])->name('login.otp');
    Route::post('login-with-otp-post',[OtpController::class,'loginWithOtpPost'])->name('login.otp.post');

});


Route::prefix('admin')->group(function () {

Route::group(['middleware' => 'guest'],function(){

    Route::get('login',[LoginController::class,'index'])->name('account.login');
    Route::post('authenticate',[LoginController::class,'authenticate'])->name('account.authenticate');
    });

    Route::group(['middleware' => 'auth','OTP'],function(){
        Route::get('logout',[LoginController::class,'logout'])->name('account.logout');
        // Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard.home');
        Route::resource('/dashboard', DashBoardController::class);

    });

});




Route::get('forget-password',[ForgetPasswordController::class,'forgetPassword'])->name('forget.password');
Route::post('forget-password-post',[ForgetPasswordController::class,'forgetPasswordPost'])->name('forget.password.post');

Route::get('reset-password/{token}',[ForgetPasswordController::class,'resetPassword'])->name('reset.password');
Route::post('reset-password-post',[ForgetPasswordController::class,'resetPasswordPost'])->name('reset.password.post');
