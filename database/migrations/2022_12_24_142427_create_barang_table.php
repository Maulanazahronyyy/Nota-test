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
		Schema::create('barang', function (Blueprint $table) {
			$table->id();
			$table->string('nama_cust')->nullable();
			$table->string('nama_barang')->nullable();
			$table->string('no_hp')->nullable();
			$table->string('keluhan')->nullable();
			$table->string('kategori_barang')->nullable();
			$table->string('harga')->nullable();
			$table->string('tgl_masuk')->nullable();
			$table->string('tgl_jadi')->nullable();
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
		Schema::dropIfExists('barang');
	}
};
