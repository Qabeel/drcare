<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors_reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
//            $table->unsignedInteger('patient_id');
//            $table->unsignedInteger('doctor_id');
//            $table->foreign('patient_id')->references('id')->on('customers')->onDelete('cascade');
//            $table->foreign('doctor_id')->references('id')->on('customers')->onDelete('cascade');
            $table->integer('rate');
            $table->text('review');
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
        Schema::dropIfExists('doctors_reviews');
    }
}
