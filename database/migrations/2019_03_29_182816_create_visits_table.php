<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('patient_id');
            $table->unsignedInteger('doctor_id');
            $table->unsignedInteger('secretary_id')->nullable();
            $table->foreign('patient_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('doctor_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('secretary_id')->references('id')->on('customers')->onDelete('cascade');
            $table->timestamp('visit_time');
            $table->text('patient_explanation');
            $table->text('doctor_notes');
            $table->integer('state');
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
        Schema::dropIfExists('visits');
    }
}
