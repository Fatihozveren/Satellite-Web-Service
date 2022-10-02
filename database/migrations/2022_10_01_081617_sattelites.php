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
            $table->string('complete_date')->nullable();
            $table->string('design_life')->nullable();
            $table->string('altitude')->nullable();
            $table->string('inclination')->nullable();
            $table->string('instruments')->nullable();
            $table->string('image')->nullable();
            $table->string('image_2')->nullable();
            $table->text('description')->nullable();
            $table->string('slug')->nullable();
            $table->string('category')->nullable();
            $table->string('status')->nullable();
            $table->string('launch_location')->nullable();
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
        Schema::dropIfExists('satellites');
    }
};
