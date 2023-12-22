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
        Schema::create('product_carts', function (Blueprint $table) {
            $table->id();
            $table->string('cart_email', 70);
            $table->unsignedBigInteger('product_id');

            $table->foreign('product_id')->references('id')
            ->on('products')->restrictOnDelete()->cascadeOnUpdate();

            $table->foreign('cart_email')->references('profile_email')->on('user_profiles')
            ->restrictOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_carts');
    }
};
