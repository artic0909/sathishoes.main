<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FixedCollectionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';








// Admin's view ==================================================================================
Route::get('/big-banner', function () {
    return view('admin.big_banner');
})->middleware(['auth', 'verified'])->name('big-banner');

Route::get('/small-banner', function () {
    return view('admin.small_banner');
})->middleware(['auth', 'verified'])->name('small-banner');

Route::get('/contact-banner', function () {
    return view('admin.contact_banner');
})->middleware(['auth', 'verified'])->name('contact-banner');

Route::get('/main-category', function () {
    return view('admin.main_category');
})->middleware(['auth', 'verified'])->name('main-category');

Route::get('/admin-sub-category', function () {
    return view('admin.sub_category');
})->middleware(['auth', 'verified'])->name('admin-sub-category');

Route::get('/all-products', function () {
    return view('admin.all_products');
})->middleware(['auth', 'verified'])->name('all-products');

Route::get('/admin-latest-products', function () {
    return view('admin.admin_latest_products');
})->middleware(['auth', 'verified'])->name('all-admin-latest-products');

Route::get('/admin-featured-products', function () {
    return view('admin.admin_featured_products');
})->middleware(['auth', 'verified'])->name('all-admin-featured-products');

Route::get('/fixed-collection', function () {
    return view('admin.fixed_collection');
})->middleware(['auth', 'verified'])->name('fixed-collection');

Route::get('/customer-support', function () {
    return view('admin.customer_support');
})->middleware(['auth', 'verified'])->name('customer-support');





// User's view ====================================================================================
Route::get('/', function () {
    return view('home');
});

Route::get('/latest-products', function () {
    return view('latest_products');
});

Route::get('/featured-products', function () {
    return view('featured_products');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/sub-category', function () {
    return view('sub_category');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/buy-franchise', function () {
    return view('franchise');
});





// admin routes=============================================================================================================================================









// API Routes===============================================================================================================================================
Route::get('/big-banner', [AdminController::class, 'big_banner_get'])->name('big_banner_get');
Route::post('/big-banner/add', [AdminController::class, 'big_banner_add'])->name('big_banner_add');
Route::put('/big-banner/edit/{id}', [AdminController::class, 'big_banner_edit'])->name('big_banner_edit');
Route::delete('/big-banner/delete/{id}', [AdminController::class, 'big_banner_delete'])->name('big_banner_delete');




Route::get('/small-banner', [AdminController::class, 'small_banner_get'])->name('small_banner_get');
Route::post('/small-banner/add', [AdminController::class, 'small_banner_add'])->name('small_banner_add');
Route::put('/small-banner/edit/{id}', [AdminController::class, 'small_banner_edit'])->name('small_banner_edit');
Route::delete('/small-banner/delete/{id}', [AdminController::class, 'small_banner_delete'])->name('small_banner_delete');




Route::get('/contact-banner', [AdminController::class, 'contact_banner_get'])->name('contact_banner_get');
Route::post('/contact-banner/add', [AdminController::class, 'contact_banner_add'])->name('contact_banner_add');
Route::put('/contact-banner/edit/{id}', [AdminController::class, 'contact_banner_edit'])->name('contact_banner_edit');
Route::delete('/contact-banner/delete/{id}', [AdminController::class, 'contact_banner_delete'])->name('contact_banner_delete');




Route::get('/main-category', [AdminController::class, 'main_category_get'])->name('main_category_get');
Route::post('/main-category/add', [AdminController::class, 'main_category_add'])->name('main_category_add');
Route::put('/main-category/edit/{id}', [AdminController::class, 'main_category_edit'])->name('main_category_edit');
Route::delete('/main-category/delete/{id}', [AdminController::class, 'main_category_delete'])->name('main_category_delete');




Route::get('/fixed-collection', [FixedCollectionController::class, 'fixed_img_get'])->name('fixed_img_get');
Route::post('/fixed-collection/add', [FixedCollectionController::class, 'fixed_img_add'])->name('fixed_img_add');
Route::put('/fixed-collection/edit/{id}', [FixedCollectionController::class, 'fixed_img_edit'])->name('fixed_img_edit');
Route::delete('/fixed-collection/delete/{id}', [FixedCollectionController::class, 'fixed_img_delete'])->name('fixed_img_delete');





