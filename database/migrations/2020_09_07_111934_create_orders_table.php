<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customername');
            $table->string('customerphone');
            $table->string('orderid');
            $table->string('productname');
            $table->integer('quantity');
            $table->string('zone');
            $table->string('address');
            $table->text('note')->nullable(True);
            $table->unsignedBigInteger('status_id')->nullable(true);
            $table->unsignedBigInteger('shop_owner_id');
            $table->timestamps();
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->foreign('shop_owner_id')->references('id')->on('shop_owners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
