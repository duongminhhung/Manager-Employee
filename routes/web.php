<?php

use App\Http\Controllers\HomeController;

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




Route::prefix('admin')->group(function () {
    // Route::get('', [Home::class, 'index'])->name('index');
    // // Route::view('','index-app');
    // Route::get('/employee', [Employee::class, 'index'])->name('employee');
    // Route::get('/employee/add_employee', [Employee::class, 'add'])->name('add_employee');
    // Route::get('/calendar', [Calendar::class, 'index'])->name('calendar');
    // Route::get('/department', [Department::class, 'index'])->name('department');
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::prefix('/employee')->group(function (){
        Route::get('/', [HomeController::class, 'employee'])->name('employee');
        Route::get('/add_employee', [HomeController::class, 'add_employee'])->name('add_employee');
        Route::post('/add_employee', [HomeController::class, 'add_employee_process'])->name('add_employee_process');

    });


});
// Route::get('/', function (){
//     return view('admin.test');
// });