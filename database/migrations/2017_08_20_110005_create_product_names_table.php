<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('product_names', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('product_range_id')->unsigned()->index();
            $table->foreign("product_range_id")->references('id')->on("product_ranges");
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
        Schema::drop('product_names');
    }
}
