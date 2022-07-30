<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('overview');
            $table->unsignedBigInteger('region_id');
            $table->unsignedBigInteger('destination_id');
            $table->unsignedBigInteger('hotel_type_id');
            $table->string('description');
            $table->string('address');
            $table->string('stars');
            $table->string('price');
            $table->string('free_cancelation');
            $table->softDeletes();
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
        Schema::dropIfExists('hotels');
    }
}
