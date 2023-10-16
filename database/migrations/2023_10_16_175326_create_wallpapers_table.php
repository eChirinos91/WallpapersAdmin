<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWallpapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallpapers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('application_id');
            $table->unsignedBigInteger('category_id');
            $table->string('thumbnail');
            $table->string('url');
            $table->string('tags');
            $table->integer('downloads');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('application_id')->references('id')->on('applications');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallpapers');
    }
}
