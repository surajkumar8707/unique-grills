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

Route::get('/products', function () {
    $jsonPath = database_path('seeders/data/categories_and_products/catalog_product.json');
    $json = \Illuminate\Support\Facades\File::get($jsonPath);
    $catalog_product = json_decode($json, true);

    foreach ($catalog_product as $category) {
        \App\Models\Categories::create([
            'id' => $category['id'],
            'name' => $category['name'],
            'slug' => $category['slug'],
            'description' => $category['description'] ?? null,
            'is_active' => $category['is_active'] ?? null,
        ]);
        foreach ($category['product'] as $product) {
            $default_image = "assets/front/images/image_not_available.jpg";
            $product = \App\Models\Product::create([
                'category_id' => $category['id'],
                'name' => $product['name'],
                'slug' => \Str::slug($product['name']),
                'description' => (isset($product['description']) and !empty($product['description'])) ?? null,
                'usage' => (isset($product['usage']) and !empty($product['usage'])) ?? null,
                'minimum_quantity' => (isset($product['minimum_quantity']) and !empty($product['minimum_quantity'])) ?? null,
                'size' => (isset($product['size']) and !empty($product['size'])) ?? null,
                'price' => (isset($product['price']) and !empty($product['price'])) ?? null,
                'image' => $default_image,
                'is_active' => (isset($product['is_active']) and !empty($product['is_active'])) ?? 1,
                'stock' => (isset($product['stock']) and !empty($product['stock'])) ?? null,
                // 'sku' => (isset($product['sku']) and !empty($product['sku'])) ?? null,
                'meta_title' => (isset($product['name']) and !empty($product['name'])) ?? null,
                'meta_description' => (isset($product['description']) and !empty($product['description'])) ?? null,
                'meta_keywords' => (isset($product['name']) and !empty($product['name'])) ?? null,
                'meta_image' => $default_image ?? null,
            ]);
        }
    }
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
Route::get('/categories/{slug}', [\App\Http\Controllers\FrontController::class, 'showSingleCategories'])->name('show.categories');
Route::get('/{category}/{product}', [\App\Http\Controllers\FrontController::class, 'showProducts'])->name('show.products');

// Language switcher route
Route::get('lang/{locale}', [\App\Http\Controllers\LanguageController::class, 'switchLang']);

// Authentication routes
require __DIR__ . '/auth.php';
