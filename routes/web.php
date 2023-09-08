<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::controller(CategoryController::class)->group(function(){
    Route::get('category', 'index')->name('category-index');
    Route::get('category/create', 'create')->name('category-create');
    Route::post('category/create/save', 'store')->name('category-save');
    Route::get('category/show/{category:id}', 'show')->name('category-show');
    Route::get('category/edit/{category}', 'edit')->name('category-edit');
    Route::put('category/edit/update', 'update')->name('category-update');
    Route::delete('category/delete/{id}', 'update')->name('category-delete');

});
