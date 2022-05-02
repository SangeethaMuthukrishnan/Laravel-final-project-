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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact',[\App\Http\Controllers\ContactformController::class,'index']);
Route::post('/contact-store',[\App\Http\Controllers\ContactformController::class,'contact_store']);
Route::get('/register',[\App\Http\Controllers\ContactformController::class,'register_page_form'])->middleware('guest');
Route::post('/registration-details-store',[\App\Http\Controllers\ContactformController::class,'register_page_form_method']);
Route::get('/login-page',[\App\Http\Controllers\ContactformController::class,'login_page']);

Route::get('/client-panel',[\App\Http\Controllers\ContactformController::class,'client_panel']);
Route::get('/user-logout',[\App\Http\Controllers\ContactformController::class,'user_logout']);
Route::get('/client-dashboard',[\App\Http\Controllers\ContactformController::class,'client_panel']);
Route::post('/login-dashboard',[\App\Http\Controllers\ContactformController::class, 'authenticate']);



Route::get('/post', [\App\Http\Controllers\MainController::class,'index']);
Route::get('/edit-contact/{id}',[\App\Http\Controllers\MainController::class,'edit_contact_form']);
Route::put('/update-contact/{id}',[\App\Http\Controllers\MainController::class,'update_contact']);
Route::get('/delete-contact/{id}',[\App\Http\Controllers\MainController::class,'destroy_user_contact']);
Route::get('/create-user-contact',[\App\Http\Controllers\MainController::class, 'create_user_contact']);
Route::post('/user-contact-store',[\App\Http\Controllers\MainController::class,'store_user_contacts']);





