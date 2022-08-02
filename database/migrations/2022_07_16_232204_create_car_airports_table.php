<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarAirportsTable extends Migration
{
  
    public function up()
    {
        Schema::create('car_airports', function (Blueprint $table) {
            $table->id();
            $table->text('details');
            $table->text('more_details');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('car_airports');
    }
}
