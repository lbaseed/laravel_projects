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
            $table->string('case_id')->unique();
            $table->string('case_name');
            $table->string('case_subject');
            $table->string('complaint_form')->nullable();
            $table->string('claimant')->nullable();
            $table->string('defendant')->nullable();
            $table->date('filing_date');
            $table->date('assignment_date')->nullable();
            $table->date('hearing_date')->nullable();
            $table->date('adjournment_date')->nullable();
            $table->date('termination_date')->nullable();
            $table->string('current_stage')->nullable();
            $table->string('division')->nullable();
            $table->text('comment')->nullable();
            $table->integer('counsel')->nullable();
            $table->string('curr_user');
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
