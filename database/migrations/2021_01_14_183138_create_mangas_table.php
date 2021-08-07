<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMangasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mangas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('description');
            $table->longText('image');
            $table->string('genre');
            $table->string('type');
            $table->string('author');
            $table->string('status');
            $table->string('releases');
            $table->string('rating')->nullable();
            $table->string('episode')->nullable();
            $table->unsignedBigInteger('group_id')->default('1');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('group_id')
            ->references('id')
            ->on('groups')
            ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mangas');
    }
}
