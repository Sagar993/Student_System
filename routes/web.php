<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student_Controller;
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
Route::get('ad', [student_Controller::class,'index']);
Route::post('add',[student_Controller::class,'add']);
Route::get('sh',[student_Controller::class,'show']);