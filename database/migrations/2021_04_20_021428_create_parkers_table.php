<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 
        Schema::create('parkers', function (Blueprint $table) {
            $table->id();
            $table->string('school_id');
            $table->string('owner_name');
            $table->string('plate_number');
            $table->unsignedBigInteger('vehicle_type');
            $table->boolean('isValid')->default(true);
            $table->string('qr_number');
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
        Schema::dropIfExists('parkers');
    }
}
