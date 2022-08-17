<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourCreatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_creators', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('start_date');
            $table->unsignedBigInteger('creator_destinations_id');
            $table->integer('adult');
            $table->integer('child');
            $table->string('car')->nullable();
            $table->string('motorcycle')->nullable();
            $table->string('bike')->nullable();
            $table->string('hiking')->nullable();
            $table->string('meals')->nullable();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('tour_creators');
    }
}
