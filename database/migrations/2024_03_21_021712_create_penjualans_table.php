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
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id('id_penjualan');
            $table->string('kode_penjualan', 20)->unique()->nullable();
            $table->date('tanggal')->nullable();
            $table->decimal('total_harga', 10,0)->nullable();
            $table->foreignId('id_user');
            $table->foreignId('id_pelanggan');
            $table->decimal('bayar', 10,0)->nullable();
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
        Schema::dropIfExists('penjualans');
    }
};
