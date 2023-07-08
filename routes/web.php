<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdministrativeUnitController;
use App\Http\Controllers\ExpenseTypeController;
use App\Http\Controllers\SheetNumberController;
use App\Http\Controllers\SubmenuController;
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
Route::get('/test', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resources(['administrativeUnit' => AdministrativeUnitController::class,
                    'submenu' => SubmenuController::class, 
                    'expenseType' => ExpenseTypeController::class,
                    'sheetNumber' => SheetNumberController::class,]);
});

require __DIR__.'/auth.php';
