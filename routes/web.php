<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertadidikR;
use App\Http\Controllers\PesertadidikPDF;
use App\Http\Controllers\GuruR;
use App\Http\Controllers\UserC;

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('pesertadidik/pdf', [PesertadidikR::class, 'pdf'])->middleware('auth');
Route::resource('pesertadidik', PesertadidikR::class)->middleware('auth');
// Route::resource('guru', GuruR::class);
//Route::get('pdf', [PesertadidikPDF::class, 'pdf']);

Route::get('register', [UserC::class, 'register'])->name('register');
Route::post('register', [UserC::class, 'register_action'])->name('register.action');

Route::get('login', [UserC::class, 'login'])->name('login');
Route::post('login', [UserC::class, 'login_action'])->name('login.action');

Route::get('logout', [UserC::class, 'logout'])->name('logout');