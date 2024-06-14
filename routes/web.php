<?php

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

Route::get("/", "PageController@login")->name('login')->middleware('guest');
Route::post("/login", "AuthController@cekLogin")->middleware('guest');

Route::group(['middleware' => ['auth']], function() // auth = admin -- guest = user
{
    Route::get("/home", "PageController@home");
    Route::get("/user", "PageController@editFormUser");
    Route::get("/logout", "AuthController@cekLogout");
    Route::get("/master", "PageController@master");
    Route::get("/master/add-form", "PageController@addFormMaster");
    Route::get("/master/edit-form/{id}", "PageController@editFormMaster");
    Route::put("/update/{id}", "PageController@updateMaster");
    Route::get("/delete/{id}", "PageController@deleteMaster");
    Route::post("/updateUser", "PageController@updateUser");
    Route::post("/save", "PageController@saveMaster");
    Route::get("/about", "PageController@about");
    Route::get("/faq", "PageController@faq");
});

