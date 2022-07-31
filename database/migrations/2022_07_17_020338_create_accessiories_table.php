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
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->string('availability')->nullable();
            $table->string('type')->nullable();
            $table->string('total_pax')->nullable();
            $table->string('free_cancellation')->nullable();
            $table->string('one_day_price')->nullable();
            $table->string('one_week_price')->nullable();
            $table->string('one_month_price')->nullable();
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
