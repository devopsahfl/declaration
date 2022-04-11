<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DynamicDependent;
use App\Http\Controllers\GetOtpController;
use App\Http\Controllers\otpVerifyController;
use App\Http\Controllers\Check;
use App\Http\Controllers\insertdataController;
// use Illuminate\Support\Facades\Route;
// use App\Models\Article;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\test;
// use App\Support\Facades\Http;
// use Illuminate\Http\Request;
// use App\Http\Controllers\ExternalApiCall;
// use App\Http\Controllers\InsertController;
// use App\Http\Controllers\DeviceController;
// use App\Http\Controllers\VerifyOtp;

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


// Route::View('','authwithotp');

// Route::post('/search',[DeviceController::class,'mainSearch']);

// Route::post('/sendOtp',[VerifyOtp::class,'verifyUser']);
// Route::post('/verifyOtp',[VerifyOtp::class,'verifyOtp']);


// Route::post('/submit',[UserController::class,'save']);

// Route::get('/checkstatus', function(){
//     return view('checkstatus');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[DynamicDependent::class,'index']);
Route::get('/sendOtp',[DynamicDependent::class,'send']);

Route::post('dynamic_dependent/fetch', 'DynamicDependent@fetch')->name('otp.fetch');
Route::post('dynamic_dependent/getData', 'DynamicDependent@getData');
//Route::get('/select', 'TestController@testfunction');

Route::post('/sendOtp',[GetOtpController::class,'getData']);


// Route::post('/submit',[GetOtpController::class,'verfiyOtp']);
// Route::post('/ok',[otpVerifyController::class,'form']);

Route::post('/submit',[GetOtpController::class,'verfiyOtp']);
Route::post('/verifyOtp',[otpVerifyController::class,'form']);
Route::post('/save',[insertdataController::class,'save']);