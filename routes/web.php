<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");

Route::get('/roles', 'App\Http\Controllers\RoleController@index')->name("role.index");
Route::get('/spectacles', 'App\Http\Controllers\SpectacleController@index')->name("spectacle.index");

Route::middleware('auth')->group(function(){
    Route::get('/roles/{id}', 'App\Http\Controllers\RoleController@show')->name("role.show");
    Route::get('/spectacle/{id}', 'App\Http\Controllers\ContractController@show')->name("spectacle.show");
});

Route::middleware('admin')->group(function(){

    Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
    Route::get('/admin/roles', 'App\Http\Controllers\Admin\AdminRoleController@index')->name("admin.role.index");
    Route::get('/admin/spectacles', 'App\Http\Controllers\Admin\AdminSpectacleController@index')->name("admin.spectacle.index");
    
    Route::post('/admin/roles/store', 'App\Http\Controllers\Admin\AdminRoleController@store')->name("admin.role.store");
    Route::delete('/admin/roles/{id}/delete', 'App\Http\Controllers\Admin\AdminRoleController@delete')->name("admin.role.delete");
    Route::get('/admin/roles/{id}/edit', 'App\Http\Controllers\Admin\AdminRoleController@edit')->name("admin.role.edit");
    Route::put('/admin/roles/{id}/update', 'App\Http\Controllers\Admin\AdminRoleController@update')->name("admin.role.update");

    Route::post('/admin/spectacles/store', 'App\Http\Controllers\Admin\AdminSpectacleController@store')->name("admin.spectacle.store");
    Route::delete('/admin/spectacles/{id}/delete', 'App\Http\Controllers\Admin\AdminSpectacleController@delete')->name("admin.spectacle.delete");
    Route::get('/admin/spectacles/{id}/edit', 'App\Http\Controllers\Admin\AdminSpectacleController@edit')->name("admin.spectacle.edit");
    Route::put('/admin/spectacles/{id}/update', 'App\Http\Controllers\Admin\AdminSpectacleController@update')->name("admin.spectacle.update");
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
