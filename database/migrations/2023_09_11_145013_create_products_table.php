<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('SKU');
            $table->longText('description');
            $table->integer('price');
            $table->integer('qty');
            $table->boolean('is_active');
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->nullable();
            $table->string('image')->nullable();
            $table->boolean('have_sizes')->nullable();
            $table->boolean('have_colors')->nullable();
            $table->boolean('have_brands')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
