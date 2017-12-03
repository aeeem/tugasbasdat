<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('role_id')->unsigned()->index()->default(2);
            $table->foreign('role_id')->references("id")->on("roles")->onDelete('cascade');
            $table->enum('sedang_aktif',[1,0])->default(1);
            $table->string('email')->unique();
            $table->string('password');
            $table->text('alamat');
            $table->integer('sektor')->unsigned()->index()->nullable();
            $table->foreign('sektor')->references('id')->on('kantorpolisi')->onDelete('cascade');
            $table->integer('nomor_ktp');
            $table->enum('agama',['islam','kristen','hindu','budha','katholik','konghuchu']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
