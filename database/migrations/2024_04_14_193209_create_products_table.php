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
            $table->string('user_type');
            $table->integer('seller_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('summary');
            $table->integer('category');
            $table->integer('subcategory');
            $table->double('price',10,2);
            $table->double('compare_price',10,2)->nullable();
            $table->string('product_image');
            $table->integer('visibility')->default(1);
            $table->timestamps();
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
