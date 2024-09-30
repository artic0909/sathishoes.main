<?php

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




// admin routes=============================================================================================================================================
