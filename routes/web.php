<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VendorController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;


Route::get('/', [HomeController::class, 'index']);

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Vendor Module
    Route::get('/vendors', [VendorController::class, 'list'])->name('vendors.list');          
    Route::get('/vendors/create', [VendorController::class, 'create'])->name('vendors.create');
    Route::post('/vendors/store', [VendorController::class, 'store'])->name('vendors.store'); 
    Route::get('/vendors/edit/{id}', [VendorController::class, 'edit'])->name('vendors.edit');
    Route::post('/vendors/update/{id}', [VendorController::class, 'update'])->name('vendors.update'); 
    Route::delete('/vendors/delete/{id}', [VendorController::class, 'destroy'])->name('vendors.destroy');
    
    // Optional vendor operations
    Route::post('/vendors/bulk-delete', [VendorController::class, 'bulkDelete'])->name('vendors.bulkDelete');
    Route::post('/vendors/status/{id}', [VendorController::class, 'changeStatus'])->name('vendors.status');
});








