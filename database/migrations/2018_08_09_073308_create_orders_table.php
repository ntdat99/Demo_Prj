<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('orderDate');
            $table->bigInteger('DeliveryDate');
            $table->string('shipName');
            $table->string('shipAddress');
            $table->integer('shipPhone');
            $table->string('customerEmail');
            $table->integer('totalPrice');
            $table->string('orderDetail');
            $table->timestamps();
            $table->integer('status')->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }

}
