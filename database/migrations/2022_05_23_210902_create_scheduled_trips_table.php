<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduledTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scheduled_trips', function (Blueprint $table) {
            $table->id();
            $table->time('request_time')->default('00:00:00');
            $table->time('trip_start_time')->default('00:00:00');
            $table->time('trip_end_time')->default('00:00:00');
            $table->time('trip_wait_time')->default('00:00:00');
            $table->boolean('status')->default(true);
            $table->foreignId('start_loc_id')->constrained('locations');
            $table->foreignId('end_loc_id')->constrained('locations');
            $table->foreignId('payment_id')->constrained('payments');
            $table->foreignId('cab_id')->constrained('cabs');
            $table->foreignId('driver_id')->constrained('drivers');
            $table->foreignId('rider_id')->constrained('riders');
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
        Schema::dropIfExists('scheduled_trips');
    }
}
