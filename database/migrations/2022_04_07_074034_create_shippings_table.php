<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('kota')->nullable();
            $table->string('alamat')->nullable();
            $table->string('ekspedisi')->nullable();
            $table->string('jenis')->nullable();
            $table->integer('harga')->default(0);
            $table->integer('harga_nasional')->default(0);
            $table->string('min')->nullable();
            $table->string('hitungan_vol')->nullable();
            $table->string('estimasi')->nullable();
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
        Schema::dropIfExists('shippings');
    }
}
