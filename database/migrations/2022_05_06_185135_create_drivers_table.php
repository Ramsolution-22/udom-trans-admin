<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('drivers', function (Blueprint $table) {
                $table->id();
                $table->string('firstName');
                $table->string('lastName');
                $table->string('phoneNumber')->unique();
                $table->binary('profile_picture');
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->boolean('status')->default(true);
                $table->boolean('active')->default(true);
                $table->foreignId('cab_id')->constrained('cabs');
                $table->string('licence');
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
        Schema::dropIfExists('drivers');
    }
}