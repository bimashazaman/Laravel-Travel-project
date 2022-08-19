<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourCreatorsTable extends Migration
{
    
    public function up()
    {
        Schema::create('tour_creators', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->date('start_date')->nullable();
            $table->string('creator_destinations_id');
            $table->integer('adult')->nullable();
            $table->integer('child')->nullable();
            $table->string('car')->nullable();
            $table->string('motorcycle')->nullable();
            $table->string('bike')->nullable();
            $table->string('hiking')->nullable();
            $table->string('meals')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->text('info')->nullable();
            $table->string('coupon')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('tour_creators');
    }
}
