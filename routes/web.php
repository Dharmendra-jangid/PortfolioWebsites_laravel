<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('index',[HomeController::class,'home']);
Route::get('/',[HomeController::class,'index'])->name('admin.index');
Route::post('sendContact',[HomeController::class,'sendContact'])->name('admin.sendContact');
Route::get('deleteContact/{id}',[HomeController::class,'deleteContact'])->name('admin.deleteContact');
Route::get('single',[HomeController::class,'single']);



Route::get('admin/',[AdminController::class,'login'])->name('admins.login');
Route::post('admin/authlogin',[AdminController::class,'authlogin'])->name('admins.authlogin');

Route::get('admin/register',[AdminController::class,'register'])->name('admins.register');
Route::post('admin/authRegister',[AdminController::class,'authRegister'])->name('admins.authRegister');


Route::get('admin/index',[AdminController::class,'index'])->name('admins.index');

Route::get('admin/about/{id}',[AdminController::class,'about'])->name('admins.about');
// Route::get('about/{id}',[AdminController::class,'abouts'])->name('admins.abouts');
Route::post('admin/addAbout/{id}',[AdminController::class,'addAbout'])->name('admins.addAbout');


Route::get('admin/experience',[AdminController::class,'experience'])->name('admins.experience');
Route::post('admin/addexperience',[AdminController::class,'addexperience'])->name('admins.addexperience');
Route::get('admin/delete/{id}',[AdminController::class,'delete'])->name('admins.delete');


Route::get('admin/service',[AdminController::class,'service'])->name('admins.service');
Route::post('admin/addservice',[AdminController::class,'addservice'])->name('admins.addservice');
Route::get('admin/deleteservice/{id}',[AdminController::class,'deleteservice'])->name('admins.deleteservice');

Route::get('admin/skil',[AdminController::class,'skil'])->name('admins.skil');
Route::post('admin/addskil',[AdminController::class,'addskil'])->name('admins.addskil');
Route::get('admin/deleteSkill/{id}',[AdminController::class,'deleteSkill'])->name('admins.deleteSkill');

 Route::get('admin/project',[AdminController::class,'project'])->name('admins.project');
 Route::post('admin/addproject',[AdminController::class,'addproject'])->name('admins.addproject');
 Route::get('admin/deleteProject/{id}',[AdminController::class,'deleteProject'])->name('admins.deleteProject');


//  Route::get('admin/contact',[AdminController::class,'contact'])->name('admins.contact');
 Route::get('admin/contacts',[AdminController::class,'contacts'])->name('admins.contacts');

