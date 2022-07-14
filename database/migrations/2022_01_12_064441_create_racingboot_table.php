<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacingbootTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('racingboot', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text("title");
            $table->text("description");
            $table->text("image");
            $table->text('name');
            $table->text("price");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('racingboot');
    }
}
