<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('name');
            $table->integer('price');
            $table->text('model_no');
            $table->text('description');
            $table->string('product_img');
            $table->boolean('isFeatured')->nullable();
            
            $table->unsignedBigInteger('categoryId');
            $table->foreign('categoryId')->references('id')->on('productcategories');

            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('users');

            $table->boolean('isActive');
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
}
