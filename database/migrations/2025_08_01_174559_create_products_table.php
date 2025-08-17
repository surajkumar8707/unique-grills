<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->longText('name');
            // $table->longText('slug')->unique();
            $table->longText('slug');
            $table->longText('description')->nullable();
            $table->text('usage')->nullable();
            $table->integer('minimum_quantity')->nullable();
            $table->longText('size')->nullable();
            $table->decimal('price', 12, 2)->nullable();
            $table->longText('units')->nullable();
            $table->longText('image')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('stock')->default(0);
            // $table->longText('sku')->unique()->nullable();
            $table->longText('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->longText('meta_keywords')->nullable();
            $table->longText('meta_image')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
