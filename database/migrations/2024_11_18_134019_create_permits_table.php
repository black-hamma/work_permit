<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permits', function (Blueprint $table) {
            $table->id();
            $table->string('permit_code');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('job_location');
            $table->string('sub_location');
            $table->text('equipment_details');
            $table->text('job_description');
            $table->string('receiver_name');
            $table->string('contract_company');
            $table->string('staff_id');
            $table->string('risk_assessment');
            $table->json('workers_names');
            $table->json('required_permits');
            $table->json('hazard_identification');
            $table->json('job_requirements');
            $table->json('ppe_requirements');
            $table->json('precautionary_measure');
            $table->boolean('disclaimer')->default(0);
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
        Schema::dropIfExists('permits');
    }
}
