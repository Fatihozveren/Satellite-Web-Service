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
        Schema::create('satellites', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('mission_name')->nullable();
            $table->string('link')->nullable();
            $table->string('launch_date')->nullable();
            $table->string('launch_location')->nullable();
            $table->string('complete_date')->nullable();
            $table->string('altitude')->nullable();
            $table->string('inclination')->nullable();
            $table->string('instruments')->nullable();
            $table->string('investigators')->nullable();
            $table->string('image')->nullable();
            $table->string('image_2')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('scientist_id');
            $table->timestamps();
            $table->foreign('scientist_id')->references('id')->on('scientists');
            $table->foreign('status_id')->references('id')->on('status');
            $table->foreign('category_id')->references('id')->on('categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('satellites');
    }
};
