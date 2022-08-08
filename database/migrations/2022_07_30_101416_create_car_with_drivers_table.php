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
            $table->decimal('three_seats');
            $table->decimal('seven_seats');
            $table->decimal('sixteen_seats');
            $table->decimal('twintynine_seats');
            $table->decimal('fortynine_seats');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('car_with_drivers');
    }
}
