<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTingkat3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tingkat3', function (Blueprint $table) {
            $table->id();
            $table->string('nit',100)->nullable();
            $table->string('nama',100)->nullable();
            $table->string('tingkat',100)->nullable();
            $table->string('jurusan',100)->nullable();
            $table->string('alasan',100)->nullable();
            $table->string('gambar',100)->nullable();
            $table->date('tgl');
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
        Schema::dropIfExists('tingkat3');
    }
}
