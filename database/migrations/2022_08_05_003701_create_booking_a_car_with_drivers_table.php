<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingACarWithDriversTable extends Migration
{
   
    public function up()
    {
        Schema::create('booking_a_car_with_drivers', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('vehicle_id')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('subject');
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('booking_a_car_with_drivers');
    }
}
