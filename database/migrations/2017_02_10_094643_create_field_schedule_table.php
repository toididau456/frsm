<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field_schedule', function (Blueprint $table) {
            $table->integer('field_id')->index()->unsigned();
            $table->integer('schedule_id')->index()->unsigned();
            $table->integer('score');
            $table->primary(['field_id', 'schedule_id']);
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
        Schema::dropIfExists('field_schedule');
    }
}
