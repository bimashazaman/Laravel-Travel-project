<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFromGyumrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('from_gyumris', function (Blueprint $table) {
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('from_gyumris');
    }
}
