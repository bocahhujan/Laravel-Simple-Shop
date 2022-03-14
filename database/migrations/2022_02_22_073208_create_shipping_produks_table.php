<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_produks', function (Blueprint $table) {
            $table->id();
            $table->integer('produk_id');
            $table->integer('weight');
            $table->integer('d_length')->default(0);
            $table->integer('d_width')->default(0);
            $table->integer('d_height')->default(0);
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('shipping_produks');
    }
}
