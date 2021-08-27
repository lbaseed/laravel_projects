<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rides', function (Blueprint $table) {
            $table->id();
            $table->String("driver_id")->nullable();
            $table->String("payment_method");
            $table->geometry("pickup_location");
            $table->geometryCollection("dropoff_location");
            $table->bigInteger("rider_id");
            $table->String("rider_name");
            $table->String("rider_phone");
            $table->String("pickup_address");
            $table->String("dropoff_address");
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
        Schema::dropIfExists('rides');
    }
}
