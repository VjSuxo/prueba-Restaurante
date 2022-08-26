<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
Route::view('/','welcome')->name('home');
Route::view('/contacto','contac')->name('contac');
Route::get('/blog', [PostController::class,'index'])->name('blog');
Route::view('/about','about')->name('about');
