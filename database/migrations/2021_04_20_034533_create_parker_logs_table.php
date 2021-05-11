<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkerLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parker_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->string('plate_number');
            $table->dateTime('dateTime_in')->nullable();
            $table->dateTime('dateTime_out')->nullable();
<<<<<<< HEAD
            $table->string('owner_name');
            // $table->integer('Phone_number');
=======
>>>>>>> parent of 9fc548e (updated database and logs)
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
        Schema::dropIfExists('parker_logs');
    }
}
