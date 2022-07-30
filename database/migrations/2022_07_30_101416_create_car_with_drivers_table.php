<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarWithDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_with_drivers', function (Blueprint $table) {
            $table->id();
            $table->string('car_name');
            $table->string('three_seats');
            $table->string('seven_seats');
            $table->string('sixteen_seats');
            $table->string('twintynine_seats');
            $table->string('fortynine_seats');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('car_with_drivers');
    }
}
