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
Route::controller(CompaniesController::class)->middleware(['auth', 'verified', 'role:Administrator'])->prefix('admin')->group(function () {
    Route::get('/companies', 'index')->name('admin.companies');
});
