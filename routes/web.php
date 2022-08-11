<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// This routes for Landing Page 

Route::get('/', function(){
    return view('landing.welcome');
});

Auth::routes();

//This routes for Admin Panel 

Route::get('/admin', function () {
    return redirect('/admin');
});

Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/settings', [Controllers\SettingController::class, 'index'])->name('settings.index');
    Route::get('/about', [Controllers\AboutController::class, 'index'])->name('about.index');

    Route::post('/settings', [Controllers\SettingController::class, 'store'])->name('settings.store');
    Route::post('/commissions/taskstore', [Controllers\TaskController::class, 'storeTask'])->name('commissions.taskstore');
    Route::get('/tasks', [Controllers\TaskController::class, 'index'])->name('tasks.index');
    Route::resource('products', Controllers\ProductController::class);
    Route::resource('customers', Controllers\CustomerController::class);
    Route::resource('orders', Controllers\OrderController::class);
    Route::resource('agents', Controllers\AgentController::class);
    Route::resource('vendors', Controllers\VendorController::class);
    Route::resource('employees', Controllers\EmployeeController::class);
    Route::get('/pay-salaries', [Controllers\PaySalary::class, 'index'])->name('employees.pay-salaries');
    Route::get('/attendance', [Controllers\Attendance::class, 'index'])->name('employees.attendance');
    Route::get('/activities', [Controllers\Activity::class, 'index'])->name('employees.activities');
    Route::resource('categories', Controllers\CategoryController::class);
    Route::resource('subcategories', Controllers\SubcategoryController::class);
    Route::resource('salaries', Controllers\PaySalaryController::class);
    Route::resource('rewords', Controllers\PointController::class);
    Route::resource('commissions', Controllers\CommissionController::class);
    Route::resource('purchases', Controllers\PurchaseController::class);
    Route::resource('all-admins', Controllers\AdminController::class);

    Route::get('/cart', [Controllers\CartController::class, 'index'])->name('cart.index');
    Route::post('/cart', [Controllers\CartController::class, 'store'])->name('cart.store');
    Route::post('/cart/change-qty', [Controllers\CartController::class, 'changeQty']);
    Route::delete('/cart/delete', [Controllers\CartController::class, 'delete']);
    Route::delete('/cart/empty', [Controllers\CartController::class, 'empty']);
});
