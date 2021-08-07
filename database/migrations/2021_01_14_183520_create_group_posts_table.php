<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('chapter');
            $table->longText('image');
            $table->unsignedBigInteger('group_id')->default('1');
            $table->unsignedBigInteger('user_id')->default('1');
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
        Schema::dropIfExists('group_posts');
    }
}
