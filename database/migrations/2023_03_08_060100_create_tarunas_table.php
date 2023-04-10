<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taruna', function (Blueprint $table) {
            $table->id();
            $table->string('nit',100)->nullable();
            $table->string('nama',100)->nullable();
            $table->string('tingkat',100)->nullable();
            $table->string('jurusan',100)->nullable();
            $table->string('alasan',100)->nullable();
            $table->string('gambar',100)->nullable();
            $table->date('tgl')->nullable();
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
        Schema::dropIfExists('taruna');
    }
}
