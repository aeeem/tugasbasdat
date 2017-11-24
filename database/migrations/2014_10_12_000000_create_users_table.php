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
            $table->integer('role_id')->index()->unsigned()->nullable()->default(2);
            $table->enum('sedang_aktif',[1,0])->default(1);
            $table->string('email')->unique();
            $table->string('password');
            // $table->string('alamat');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('dihapus')->unsigned()->nullable();
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
