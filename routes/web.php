<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('product', ProductController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('testimonial', TestimonialController::class);

    Route::get('get-product', [ProductController::class, 'getData'])->name('productData');
    Route::get('get-blog', [BlogController::class, 'getData'])->name('blogData');
    Route::get('get-testimonial', [TestimonialController::class, 'getData'])->name('testimonialData');
});

require __DIR__ . '/auth.php';
