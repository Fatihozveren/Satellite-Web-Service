<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('satellite_to_scientist', function (Blueprint $table) {
            $table->unsignedBigInteger('satellite_id');
            $table->unsignedBigInteger('scientist_id');
            $table->foreign('scientist_id')->references('id')->on('scientists');
            $table->foreign('satellite_id')->references('id')->on('satellites');

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
        Schema::dropIfExists('satellite_to_scientist');
    }
};
