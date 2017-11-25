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
              // $table->string('alamat');
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
