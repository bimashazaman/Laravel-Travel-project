<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFromDilijansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('from_dilijans', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('nameTwo')->nullable();
            $table->string('nameThree')->nullable();
            $table->string('nameFour')->nullable();
            $table->string('nameFive')->nullable();
            $table->string('nameSix')->nullable();
            $table->string('nameSeven')->nullable();
            $table->string('type')->default('car');
            $table->string('nameEight')->nullable();
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
        Schema::dropIfExists('from_dilijans');
    }
}
