<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->id();
            $table->string('case_id');
            $table->string('case_name');
            $table->string('case_type');
            $table->string('claimant');
            $table->string('defendant');
            $table->date('filing_date');
            $table->date('assignment_date');
            $table->date('hearing_date');
            $table->string('current_stage');
            $table->integer('counsel');
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
        Schema::dropIfExists('cases');
    }
}
