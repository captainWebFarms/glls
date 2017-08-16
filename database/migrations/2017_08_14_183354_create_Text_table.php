<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('texts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('text');
            $table->integer('page_id')->unsigned()->index();
            $table->foreign("page_id")->references('id')->on("pages");
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
        //
        Schema::dropIfExists('texts');
    }
}
