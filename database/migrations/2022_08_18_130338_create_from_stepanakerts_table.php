<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFromStepanakertsTable extends Migration
{
    
    public function up()
    {
        Schema::create('from_stepanakerts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nameTwo')->nullable();
            $table->string('nameThree')->nullable();
            $table->string('nameFour')->nullable();
            $table->string('nameFive')->nullable();
            $table->string('nameSix')->nullable();
            $table->string('nameSeven')->nullable();
            $table->string('nameEight')->nullable();
            $table->string('type')->default('car');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('from_stepanakerts');
    }
}
