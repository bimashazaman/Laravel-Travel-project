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
            $table->string('name');
            $table->string('nameTwo');
            $table->string('nameThree');
            $table->string('nameFour');
            $table->string('nameFive');
            $table->string('nameSix');
            $table->string('nameSeven');
            $table->string('nameEight');
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
