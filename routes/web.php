<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


// Route::get('/', function () {
//     return view('index');
// });
Route::resource('employees', EmployeeController::class);
Route::get('/', [EmployeeController::class, 'index']);
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');

