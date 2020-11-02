<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\InteresseController;
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

Route::get('/', [AppController::class, "index"])->name("index");
Route::post('/submit-informations', [AppController::class, "submitInformations"])->name("infos.submit");

Auth::routes();

Route::group(['middleware' => "auth", 'prefix' => "dashboard"], function(){
    Route::get("/", [AdminController::class, "index"])->name("admin.index");
    Route::get("/statistiques", [InteresseController::class, "index"])->name("stats.index");
});
