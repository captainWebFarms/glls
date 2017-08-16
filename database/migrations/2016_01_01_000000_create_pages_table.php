<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use TCG\Voyager\Models\Page;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for storing roles
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id');
            $table->string('title');
            $table->text('excerpt')->nullable();
            $table->text('body')->nullable();
            $table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->enum('status', Page::$statuses)->default(Page::STATUS_INACTIVE);
            $table->timestamps();
            $table->integer('image_id')->unsigned()->index();
            $table->foreign("image_id")->references('id')->on("images");
            $table->integer('image_medium_id')->unsigned()->index();
            $table->foreign("image_medium_id")->references('id')->on("images");
            $table->integer('image_small_id')->unsigned()->index();
            $table->foreign("image_small_id")->references('id')->on("images");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pages');
    }
}
