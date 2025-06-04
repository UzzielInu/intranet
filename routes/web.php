<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdministrativeUnitController;
use App\Http\Controllers\ExpenseTypeController;
use App\Http\Controllers\SheetNumberController;
use App\Http\Controllers\SubmenuController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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
Route::get('/tortas-migrate', function () {
    Artisan::call('migrate:fresh');
    return('DONE');
});
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/test', function () {
    return view('layouts.test');
});
Route::get('/testlayout', function () {
    return view('layouts.newLayout');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/catalogues', function () { return view('catalogues.index'); })->middleware(['auth', 'verified'])->name('catalogues.index');
    Route::resources([
        'administrativeUnit' => AdministrativeUnitController::class,
        'submenu' => SubmenuController::class, 
        'expenseType' => ExpenseTypeController::class,
        'sheetNumber' => SheetNumberController::class,
        'report' => ReportController::class,
        'company' => CompanyController::class,
        'area' => AreaController::class,
        'machine' => MachineController::class,]);
    });
    Route::get('/area/create/{company}', [AreaController::class, 'createFromCompany'])->middleware(['auth', 'verified'])->name('area.createFromCompany');
    Route::get('/machine/create/{area}', [MachineController::class, 'createFromArea'])->middleware(['auth', 'verified'])->name('machine.createFromArea');
    Route::get('/options/area/{company}',[AreaController::class, 'options'])->middleware(['auth', 'verified'])->name('area.options');
    Route::get('/options/machine/{area}',[MachineController::class, 'options'])->middleware(['auth', 'verified'])->name('machine.options');
require __DIR__.'/auth.php';
