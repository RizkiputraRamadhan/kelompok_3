<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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



Route::get('/', [LandingController::class, 'index']);
Route::get('/detail/{id}', [LandingController::class, 'detail']);
Route::get('/room', [LandingController::class, 'room']);
Route::get('/register', [LandingController::class, 'register']);
Route::post('/register', [LandingController::class, 'regAuth']);
Route::get('/login', [LandingController::class, 'login']);
Route::post('/login', [LandingController::class, 'authenticate']);
Route::post('logout', [LandingController::class, 'logout'])
->name('logout');

Route::get('/user/home', [DashboardController::class, 'userHome']);

Route::get('/admin/home', [DashboardController::class, 'adminHome']);
Route::get('/admin/room', [DashboardController::class, 'adminRoom']);
Route::get('/admin/room/create', [DashboardController::class, 'adminCreate']);
Route::post('/admin/room/store', [DashboardController::class, 'adminStore']);
Route::get('/admin/room/edit/{id}', [DashboardController::class, 'adminEdit']);
Route::post('/admin/room/update/{id}', [DashboardController::class, 'adminUpdate']);
Route::delete('/admin/room/delete/{id}', [DashboardController::class, 'destroy']);
Route::middleware(['auth'])->group(function () {
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dokter', function() {
        return view('dokter');
    });
});



require __DIR__.'/auth.php';
