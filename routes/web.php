<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SuratNoDinasController;
use App\Http\Controllers\SuratPerintahController;
use App\Http\Controllers\UserController;
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
    return redirect('/login');
})->middleware('guest');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', function () {
        return view('admin.dashboard');
    })->name('home');

    Route::prefix('/surat')->group(function () {
        Route::resource('/no_dinas', SuratNoDinasController::class);
        Route::get('/no_dinas/{id}/download', [SuratNoDinasController::class, 'download'])->name('no_dinas.download');

        Route::resource('/perintah', SuratPerintahController::class);
        Route::get('/perintah/{id}/download', [SuratPerintahController::class, 'download'])->name('perintah.download');
    });


    Route::resource('/user', UserController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

    Route::resource('/employee', EmployeeController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
    Route::get('employee/find', [EmployeeController::class, 'findEmployee'])->name('employee.find');
});
