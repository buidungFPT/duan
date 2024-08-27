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
        Schema::create('products_image', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('products_id');
            $table->string('image_url');
            $table->enum('image_type',['main','secondary'])->default('main');
            $table->timestamps(); 
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_image');
    }
};
