<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estate_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('estateId')->unsigned()->index();
            $table->foreign('estateId')->references('id')->on('estates');
            $table->string('title',250);
            $table->string('slug',250);
            $table->string('price');
            $table->text('content');
            $table->string('label');
            $table->softDeletes();
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
        Schema::dropIfExists('estate_infos');
    }
}
