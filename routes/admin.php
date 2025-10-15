<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\{AdminController, CustomerController, HomePageCarouselController, CategoriesController, ClientFeedbackController, ProductController, ProjectController};
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "Admin" middleware group. Make something great!
|
*/

// Admin routes
Route::get('/login', [LoginController::class, 'showAdminLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'adminLogin'])->name('login.post');
Route::any('/logout', [LoginController::class, 'adminLogout'])->name('logout');

// Authenticated routes
Route::middleware('role:admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::post('/profile', [AdminController::class, 'profileUpdate'])->name('profile.update');
    Route::get('/change-password', [AdminController::class, 'changePassword'])->name('password');
    Route::post('/update-password', [AdminController::class, 'updatePassword'])->name('update.password');
    Route::get('/setting', [AdminController::class, 'setting'])->name('setting');
    Route::post('/setting-update/{id}', [AdminController::class, 'settingUpdate'])->name('setting.update');

    Route::get('/contacts', [AdminController::class, 'contacts'])->name('contacts');
    Route::get('/enquiries', [AdminController::class, 'enquiries'])->name('enquiries');
    Route::get('/bookings', [AdminController::class, 'bookings'])->name('bookings');

    Route::get('/social-media', [AdminController::class, 'socialMedia'])->name('social.media');
    Route::post('/social-media-update/{id}', [AdminController::class, 'socialMediaUpdate'])->name('social.media.update');

    // Pages
    Route::group(['prefix' => '/pages', 'as' => 'pages.'], function () {
        Route::get('/about', [AdminController::class, 'aboutPage'])->name('about');
        Route::get('/our-room', [AdminController::class, 'ourRoomPage'])->name('our.room');
        Route::get('/gallery', [AdminController::class, 'galleryPage'])->name('gallery');
    });

    Route::resource('home-page-carousel', HomePageCarouselController::class);
    Route::resource('categories', CategoriesController::class);
    Route::resource('product', ProductController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('client-feedback', ClientFeedbackController::class);
    Route::post('/change-status', [HomePageCarouselController::class, 'changeStatus'])->name('change.status');

    Route::group(['prefix' => '/ajax', 'as' => 'ajax.'], function () {
        Route::post('/categories/change-status', [CategoriesController::class, 'changeStatus'])->name('categories.change.status');
        Route::post('/product/change-status', [ProductController::class, 'changeStatus'])->name('product.change.status');
        Route::post('/project/change-status', [ProjectController::class, 'changeStatus'])->name('project.change.status');
    });
});
