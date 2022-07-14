<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOderdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oderdetail', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text("Shoeid");
            $table->text("ShoesName");
            $table->text("Price");
            $table->text("Size");
            $table->text("Number");
            $table->text("Address");
            $table->text("Email");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oderdetail');
    }
}
