<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Sabberworm\CSS\Value\Size;

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
            $table->string('school_id')->nullable();
            $table->string('owner_name');
            $table->string('plate_number');
            $table->string('phone_number');
            $table->unsignedBigInteger('vehicle_model_id');
            $table->unsignedBigInteger('vehicle_category_id');
            $table->boolean('isValid')->default(true);
            $table->string('qr_number');
            $table->string('color')->nullable();
            $table->string('department')->nullable();
            $table->string('parker_type')->nullable();
            $table->date('qr_expiration')->nullable();
            $table->string('expiration_status')->nullable()->default('active');
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
