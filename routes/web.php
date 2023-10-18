<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/user", [\App\Http\Controllers\UserController::class, "index"]);
Route::post("/user", [\App\Http\Controllers\UserController::class, "store"])->name("store-user");

Route::get("/books", [\App\Http\Controllers\EntityController::class, "index"])->name("books");
Route::post("/books", [\App\Http\Controllers\EntityController::class, "store"])->name("save_book");
Route::get("/remove_book/{id}", [\App\Http\Controllers\EntityController::class, "delete"])->name("remove_book");

Route::get("/upload", [\App\Http\Controllers\FileUploadController::class, "index"]);
Route::post("/upload", [\App\Http\Controllers\FileUploadController::class, "upload"])->name("upload_file");

Route::get("/my_user", [\App\Http\Controllers\MyUserController::class, "showUser"]);

Route::get("/redirect_test", \App\Http\Controllers\TestRedirectController::class);

Route::get("/userform", [\App\Http\Controllers\FormProcessor::class, "index"])->name("userform");
Route::post("/store_form", [\App\Http\Controllers\FormProcessor::class, "store"])->name("store_form");
