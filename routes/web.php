<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('employee', EmployeeController::class);
    Route::get('qrcode/{id}', [EmployeeController::class, 'generate'])->name('employee.generate');
    Route::get('/cetakpdf', [EmployeeController::class, 'cetakpdf'])->name('employee.cetakpdf');

    Route::resource('depart', DepartmentController::class);
    Route::get('/cetakdept', [DepartmentController::class, 'cetakdept'])->name('depart.cetakdept');

    Route::resource('project', ProjectController::class);
    Route::get('/cetakproj', [ProjectController::class, 'cetakproj'])->name('project.cetakproj');
});



require __DIR__ . '/auth.php';
