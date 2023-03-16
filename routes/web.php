<?php

use App\Http\Livewire\Calendar;
use App\Http\Livewire\Department;
use App\Http\Livewire\Employee;
use App\Http\Livewire\Home;
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



Route::prefix('admin')->group(function () {
    Route::get('/', [Home::class, 'index'])->name('index');
    Route::get('/employee', [Employee::class, 'index'])->name('employee');
    Route::get('/employee/add_employee', [Employee::class, 'add'])->name('add_employee');
    Route::get('/calendar', [Calendar::class, 'index'])->name('calendar');
    Route::get('/department', [Department::class, 'index'])->name('department');
});