<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarWithDriverInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_with_driver_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('model');
            $table->string('type');
            $table->string('seats');
            $table->string('overview');
            $table->string('cancelation_fee');
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
        Schema::dropIfExists('car_with_driver_infos');
    }
}
