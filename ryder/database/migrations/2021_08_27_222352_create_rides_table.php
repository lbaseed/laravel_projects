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
            $table->String("payment_method")->nullable();
            $table->geometry("pickup_location")->nullable();
            $table->geometryCollection("dropoff_location")->nullable();
            $table->bigInteger("rider_id")->nullable();
            $table->String("rider_name");
            $table->String("rider_phone");
            $table->String("pickup_address")->nullable();
            $table->String("dropoff_address")->nullable();
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
