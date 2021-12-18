<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('userId')->unsigned()->index();
            $table->foreign('userId')->references('id')->on('users');
            $table->enum('status',['Satılık','Kiralık'])->default('Satılık');
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->boolean('show')->default(true);
            $table->boolean('isItSold')->default(false);
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
        Schema::dropIfExists('estates');
    }
}
