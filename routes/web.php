<?php

use App\Http\Controllers\{
    ContactController
};
use Illuminate\Support\Facades\Route;

Route::get('/contact/logout', [ContactController::class, 'logout'])->name('contact.logout');

Route::middleware(['auth'])->group(function () {
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::get('/contact/edit/{id}', [ContactController::class, 'edit'])->name('contact.edit');
Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
Route::get('/contact/{id}', [ContactController::class, 'show'])->name('contact.show');
Route::put('/contact/{id}', [ContactController::class, 'update'])->name('contact.update');

});

Route::get('/', [ContactController::class, 'index'])->name('contact.index');

//logout

Route::post('/contact/loginSet', [ContactController::class, 'loginSet'])->name('contact.loginSet');
Route::get('/login', function () {return view('contact.login');})->name('login');


