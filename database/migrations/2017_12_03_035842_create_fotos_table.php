<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path');   
        });


       Schema::table('buron', function($table){
            $table->foreign('foto_id')->references('id')->on('foto')->ondelete('cascade');
        });


        Schema::table('lost', function($table){
            $table->foreign('foto_id')->references('id')->on('foto')->ondelete('cascade');
        });


      
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fotos');
    }
}
