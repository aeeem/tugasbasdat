<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
     DB::table('roles')->insert([
        
            ['name' => 'admin'], ['name' => 'user',]
        ]);
     
       Schema::create('kantorpolisi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('kota');
            $table->string('provinsi');
            $table->text('alamat');
            $table->string('sektor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
