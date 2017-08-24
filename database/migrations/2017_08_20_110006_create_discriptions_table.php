<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('discriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('discriptionName');
            $table->integer('product_name_id')->unsigned()->index();
            $table->foreign("product_name_id")->references('id')->on("product_names");
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
        Schema::drop('discriptions');

    }
}
