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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('cart_id');
            $table->string('status')->default('pending');
            $table->string('payment_method')->default('cash');
            $table->integer('total');
            $table->integer('discount')->default(0);
            $table->integer('tax')->default(0);
            $table->integer('final_total');
            $table->integer('paid')->default(0);
            $table->integer('return')->default(0);
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
        Schema::dropIfExists('payments');
    }
};
