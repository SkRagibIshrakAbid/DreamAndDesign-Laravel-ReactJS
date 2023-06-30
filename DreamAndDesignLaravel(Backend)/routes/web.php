<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\snlController;
use App\Http\Controllers\decoratorController;
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

Route::get('/',[snlController::class,'Login'])->middleware('loginValidation');

//snlController
Route::get('/decorator/signup',[snlController::class,'Signup'])->name('signup')->middleware('loginValidation');
Route::post('/decorator/signup',[snlController::class,'Signupcheck'])->name('signup');
Route::get('/decorator/login',[snlController::class,'Login'])->name('login')->middleware('loginValidation');
Route::post('/decorator/login',[snlController::class,'Logincheck'])->name('login');
Route::get('/logout',[snlController::class,'logout'])->name('logout');


//decoratorController  Profile
Route::get('/decorator/dash', [decoratorController::class,'decoratorDash'])->name('decoratorDash')->middleware('decoratorValidation');
Route::get('/decorator/edit',[decoratorController::class,'decoEdit'])->name('decoEdit')->middleware('decoratorValidation');
Route::post('/decorator/edit',[decoratorController::class,'decoEditCheck'])->name('decoEdit');

//decoratorController  Adds
Route::get('/decorator/postadd', [decoratorController::class,'decoratorPostAdd'])->name('decoratorPostAdd')->middleware('decoratorValidation');
Route::post('/decorator/postadd', [decoratorController::class,'decoratorPostAddCheck'])->name('decoratorPostAdd');
Route::get('/decorator/viewadd', [decoratorController::class,'viewadd'])->name('viewadd')->middleware('decoratorValidation');
Route::get('/edit/{id}',[decoratorController::class,'editadd']);
Route::post('/decorator/viewadd',[decoratorController::class,'Editcheck'])->name('editadd');

//decoratorController  WantedPost
Route::get('/decorator/wantedpost', [decoratorController::class,'wantedpost'])->name('wantedpost')->middleware('decoratorValidation');



//decoratorController  Order
Route::get('/decorator/vieworder', [decoratorController::class,'decoratorViewOrder'])->name('decoratorViewOrder')->middleware('decoratorValidation');
Route::get('/accept/{id}',[decoratorController::class,'accept']);
Route::get('/reject/{id}',[decoratorController::class,'reject']);





