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
            $table->string('product_title');
            $table->string('product_short_desc');
            $table->string('product_price');
            $table->boolean('product_discount');
            $table->string('product_discount_price');
            $table->string('product_image');
            $table->boolean('product_stock');
            $table->float('product_star');
            $table->enum('product_remark', ['popular', 'new', 'top', 'special', 'tranding', 'regular']);

            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');

            $table->foreign('category_id')->references('id')
            ->on('product_categories')->restrictOnDelete()->cascadeOnUpdate();

            $table->foreign('brand_id')->references('id')
            ->on('product_brands')->restrictOnDelete()->cascadeOnUpdate();

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
