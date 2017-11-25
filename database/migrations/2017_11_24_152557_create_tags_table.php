<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->unique();
        });
            Schema::create('memiliki', function (Blueprint $table) {
            $table->integer('post_id')->index()->unsigned();
            $table->foreign('post_id')->references("id")->on("posts")->onDelete('cascade');
            $table->integer('tag_id')->index()->unsigned();
            $table->foreign('tag_id')->references("id")->on("tags")->onDelete('cascade');
            $table->primary(['tag_id', 'post_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
         Schema::dropIfExists('memiliki');
    }
}
