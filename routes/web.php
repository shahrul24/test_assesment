<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;

Route::get('/api/company/{id}', [CompanyController::class, 'show_api'])->name('api.company.show_api');

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('register','register')->name('register');
    Route::post('register','registerSave')->name('register.save');

    Route::get('login','login')->name('login');
    Route::post('login','loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(CompanyController::class)->prefix('company')->group(function () {
        Route::get('', 'index')->name('company');
        Route::get('create', 'create')->name('company.create');
        Route::post('store', 'store')->name('company.store');
        Route::get('show/{id}','show')->name('company.show');
        Route::get('edit/{id}','edit')->name('company.edit');
        Route::put('edit/{id}','update')->name('company.update');
        Route::delete('destroy/{id}','destroy')->name('company.destroy');
    });

    Route::controller(EmployeeController::class)->prefix('employee')->group(function () {
        Route::get('', 'index')->name('employee');
        Route::get('create', 'create')->name('employee.create');
        Route::post('store', 'store')->name('employee.store');
        Route::get('show/{id}','show')->name('employee.show');
        Route::get('edit/{id}','edit')->name('employee.edit');
        Route::put('edit/{id}','update')->name('employee.update');
        Route::delete('destroy/{id}','destroy')->name('employee.destroy');

    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');

});

