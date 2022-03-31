<?php
use App\Http\Controllers\{
    ContactController
};
use Illuminate\Support\Facades\Route;

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

Route::get('/contact/create',[ContactController::class,'create'])->name('contact.create');
Route::get('/',[ContactController::class,'index'])->name('contact.index');

Route::post('/contact/edit/{id}',[ContactController::class,'edit'])->name('contact.edit');
Route::delete('/contact/{id}',[ContactController::class,'destroy'])->name('contact.destroy');
Route::get('/contact/{id}',[ContactController::class,'show'])->name('contact.show');






