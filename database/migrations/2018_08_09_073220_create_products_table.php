<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->string('description');
            $table->integer('price');
            $table->unsignedInteger('categoryId')->nullable();
            $table->foreign('categoryId')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
            $table->integer('status')->default(1);
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }

}
