<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePutriBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('putri_barangs', function (Blueprint $table) {
            $table->id('No');
            $table->char('Kode_Jenis',2);
            $table->string('nama_barang');
            $table->string('detail_barang');
            $table->string('foto');
            $table->integer('harga');
            $table->integer('stock');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('putri_barangs');
    }
}
