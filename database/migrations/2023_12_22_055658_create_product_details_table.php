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
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->string('product_thumbnail');
            $table->string('product_img1');
            $table->string('product_img2');
            $table->string('product_img3');
            $table->string('product_img4');
            $table->longText('product_long_desc');
            $table->longText('product_color');
            $table->longText('product_size');
            $table->unsignedBigInteger('product_id')->unique();
            
            $table->foreign('product_id')->references('id')
            ->on('products')->restrictOnDelete()->cascadeOnUpdate();
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
