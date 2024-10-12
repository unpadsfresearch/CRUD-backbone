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
        Schema::create('perans', function (Blueprint $table) {
            $table->id();
            $table->text('content')->nullable();
            
            $table->unsignedBigInteger('film_id');
            $table->foreign('film_id')->references('id')->on('films');

            $table->unsignedBigInteger('cast_id');
            $table->foreign('cast_id')->references('id')->on('cast');

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
        Schema::dropIfExists('perans');
    }
};
