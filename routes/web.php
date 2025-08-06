<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and all of them
| will be assigned to the "web" middleware group. Make something great!
|
*/

// Redirect to admin login page
Route::get('/', function () {
    return redirect()->route('admin.login.form');
});

// Front-end routes (non-admin)
Route::group(['prefix' => '/', 'as' => 'front.'], function () {
    Route::get('/', [\App\Http\Controllers\FrontController::class, 'home'])->name('home');
    Route::get('/about', [\App\Http\Controllers\FrontController::class, 'aboutUs'])->name('about');
    Route::get('/faqs', [\App\Http\Controllers\FrontController::class, 'faqs'])->name('faqs');
    Route::get('/gallery', [\App\Http\Controllers\FrontController::class, 'gallery'])->name('gallery');
    Route::get('/privacy-policy', [\App\Http\Controllers\FrontController::class, 'privacyPolicy'])->name('privacy.policy');
    Route::get('/terms-condition', [\App\Http\Controllers\FrontController::class, 'termsCondition'])->name('terms.condition');
    Route::get('/shipping-policy', [\App\Http\Controllers\FrontController::class, 'shippingPolicy'])->name('shipping.policy');
    Route::get('/refund-and-cancellation-policy', [\App\Http\Controllers\FrontController::class, 'refundCancellationPolicy'])->name('refund.and.cancellation.policy');
    Route::get('/contact', [\App\Http\Controllers\FrontController::class, 'contactUs'])->name('contact');
    Route::post('/save-contact-us', [\App\Http\Controllers\FrontController::class, 'saveContactUs'])->name('save.contact');
});

// Add category/product routes LAST to avoid conflicts
Route::get('/{category}/{product}', [\App\Http\Controllers\FrontController::class, 'showProducts'])->name('show.products');

// Language switcher route
Route::get('lang/{locale}', [\App\Http\Controllers\LanguageController::class, 'switchLang']);

// Authentication routes
require __DIR__ . '/auth.php';
