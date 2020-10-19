<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->integer('id');
            $table->text('category');
            $table->integer('produce');
            $table->text('description');
            $table->integer('button');
            $table->text('vocablary');
            $$table->unsignedInteger('reply_id');  // 追加
            // 外部キーを追加
            $table->foreign('reply_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $$table->unsignedInteger('user_id');  // 追加
            // 外部キーを追加
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->timestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}