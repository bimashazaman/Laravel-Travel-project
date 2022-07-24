<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('destination_id');
            $table->string("name");
            $table->string("type");
            $table->string("duration");
            $table->string('start_date');
            $table->string('end_date')->nullable();
            $table->string("price");
            $table->string("one_day_price");
            $table->string("one_week_price");
            $table->string("one_month_price");
            $table->string("one_year_price");
            
            $table->string('description')->nullable();
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
        Schema::dropIfExists('tours');
    }
}
