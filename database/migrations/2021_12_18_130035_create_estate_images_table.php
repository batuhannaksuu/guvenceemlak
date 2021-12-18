<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estate_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('estateInfoId')->unsigned()->index();
            $table->foreign('estateInfoId')->references('id')->on('estate_infos');
            $table->string('name');
            $table->boolean('coverPhoto')->default(false);
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
        Schema::dropIfExists('estate_images');
    }
}
