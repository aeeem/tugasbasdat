<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaporanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_laporan');
            $table->integer('jenis_laporan')->index()->unsigned();
            $table->foreign('jenis_laporan')->references("id")->on("kejadian")->onDelete('cascade');
            $table->integer('user_id')->index()->unsigned();
            $table->foreign('user_id')->references("id")->on("users")->onDelete('cascade');
            $table->enum('diterima',['sudah','belum'])->default('belum');
            $table->text('deskripsi');
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
        Schema::dropIfExists('laporan');
    }
}
