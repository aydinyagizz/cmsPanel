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

\Illuminate\Support\Facades\Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::match(['get', 'post'], '/admin/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login')->middleware('alreadyLoggedIn');
Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');


// ADMİN
Route::prefix('/admin')->middleware(['is_admin', 'role:Admin'])->group(function () {
    Route::get('/home', [\App\Http\Controllers\Admin\AdminController::class, 'adminIndex'])->name('admin.index');


    Route::get( '/blogCategory', [\App\Http\Controllers\Admin\BlogCategoryController::class, 'blogCategoryList'])->name('admin.blog.category.list');
    Route::post( '/blogCategoryAdd', [\App\Http\Controllers\Admin\BlogCategoryController::class, 'blogCategoryAdd'])->name('admin.blog.category.add');
    Route::post( '/blogCategoryDelete', [\App\Http\Controllers\Admin\BlogCategoryController::class, 'blogCategoryDelete'])->name('admin.blog.category.delete');
    Route::post( '/blogCategoryUpdate/{id}', [\App\Http\Controllers\Admin\BlogCategoryController::class, 'blogCategoryUpdate'])->name('admin.blog.category.update');


    Route::get( '/blog', [\App\Http\Controllers\Admin\BlogController::class, 'blogList'])->name('admin.blog.list');
    Route::post( '/blogAdd', [\App\Http\Controllers\Admin\BlogController::class, 'blogAdd'])->name('admin.blog.add');
    Route::post( '/blogDelete', [\App\Http\Controllers\Admin\BlogController::class, 'blogDelete'])->name('admin.blog.delete');
    Route::post( '/blogUpdate/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'blogUpdate'])->name('admin.blog.update');

});
