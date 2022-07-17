<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessioriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessiories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('availability');
            $table->string('type');
            $table->string('total_pax');
            $table->string('free_cancellation');
            $table->string('one_day_price');
            $table->string('one_week_price');
            $table->string('one_month_price');
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
        Schema::dropIfExists('accessiories');
    }
}
