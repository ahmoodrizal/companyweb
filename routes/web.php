<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::resource('employee', EmployeeController::class)->middleware(['auth']);
Route::resource('depart', DepartmentController::class)->middleware(['auth']);
Route::get('/cetakpdf', [EmployeeController::class, 'cetakpdf'])->middleware(['auth'])->name('employee.cetakpdf');
Route::get('/cetakdept', [DepartmentController::class, 'cetakdept'])->middleware(['auth'])->name('depart.cetakdept');
require __DIR__ . '/auth.php';
