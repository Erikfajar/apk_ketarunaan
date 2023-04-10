<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasi3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasi3', function (Blueprint $table) {
            $table->id();
            $table->string('nit',20)->nullable();
            $table->string('nama',500)->nullable();
            $table->string('tingkat',100)->nullable();
            $table->string('jurusan',500)->nullable();
            $table->string('lomba',500)->nullable();
            $table->string('juara',500)->nullable();
            $table->date('tgl')->nullable();
            $table->string('gambar',100)->nullable();
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
        Schema::dropIfExists('prestasi3');
    }
}
