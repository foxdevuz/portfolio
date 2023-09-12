<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;


Route::get('login', [AdminController::class, 'dirLogin'])->name('admin.login');

Route::any('/send-Mail', [MailController::class, 'index']);

Route::get('/', [DirectionController::class, 'welcome'])->name('welcome');
Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});

#admin panel
Route::middleware(['admin'])->group(function() {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
});
#login
Route::post('/login', [AdminController::class, 'login'])->name('admin.login');