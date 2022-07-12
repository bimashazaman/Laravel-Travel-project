<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripSubdestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_subdestinations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trip_id');
            // $table->unsignedBigInteger('parent_destination_id');
            $table->unsignedBigInteger('destination_id');
            $table->string('name');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
         
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
        Schema::dropIfExists('trip_subdestinations');
    }
}
