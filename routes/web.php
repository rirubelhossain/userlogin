<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route :: get('/',[UserController::class, 'welcomeuser'])->name('welcomuser');
Route :: get('/register', [UserController::class,'user_register'])->name('user_register');
Route :: get('/login', [UserController::class,'userlogin'])->name('userlogin');


