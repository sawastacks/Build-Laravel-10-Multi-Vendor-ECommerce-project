<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Models\Admin;

Route::prefix('admin')->name('admin.')->group(function(){
 
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
        Route::view('/login','back.pages.admin.auth.login')->name('login');
        Route::post('/login_handler',[AdminController::class,'loginHandler'])->name('login_handler');
        Route::view('/forgot-password','back.pages.admin.auth.forgot-password')->name('forgot-password');
        Route::post('/send-password-reset-link',[AdminController::class,'sendPasswordResetLink'])->name('send-password-reset-link');
        Route::get('/password/reset/{token}',[AdminController::class,'resetPassword'])->name('reset-password');
        Route::post('/reset-password-handler',[AdminController::class,'resetPasswordHandler'])->name('reset-password-handler');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','back.pages.admin.home')->name('home');
        Route::post('/logout_handler',[AdminController::class,'logoutHandler'])->name('logout_handler');
        Route::get('/profile',[AdminController::class,'profileView'])->name('profile');
        Route::post('/change-profile-picture',[AdminController::class,'changeProfilePicture'])->name('change-profile-picture');
        Route::view('/settings','back.pages.settings')->name('settings');
        Route::post('/change-logo',[AdminController::class,'changeLogo'])->name('change-logo');
        Route::post('/change-favicon',[AdminController::class,'changeFavicon'])->name('change-favicon');

        //CATEGORIES AND SUB CATEGORIES MANAGEMENT
        Route::prefix('manage-categories')->name('manage-categories.')->group(function(){
           Route::controller(CategoriesController::class)->group(function(){
               Route::get('/','catSubcatList')->name('cats-subcats-list');
               Route::get('/add-category','addCategory')->name('add-category');
               Route::post('/store-category','storeCategory')->name('store-category');
               Route::get('/edit-category','editCategory')->name('edit-category');
               Route::post('/update-category','updateCategory')->name('update-category');
               Route::get('/add-subcategory','addSubCategory')->name('add-subcategory');
               Route::post('/store-subcategory','storeSubCategory')->name('store-subcategory');
               Route::get('/edit-subcategory','editSubCategory')->name('edit-subcategory');
               Route::post('/update-subcategory','updateSubCategory')->name('update-subcategory');
           });
        });
    });

});

