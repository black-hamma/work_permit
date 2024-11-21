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
            $table->string('permit_uid');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('job_location');
            $table->string('sub_location');
            $table->text('equipment_details');
            $table->text('job_description');
            $table->string('receiver_name');
            $table->string('contract_company');
            $table->string('staff_id');
            $table->text('workers_names');
            $table->string('risk_assessment');
            $table->string('required_permits');
            $table->string('hazard_identification');
            $table->string('job_requirements');
            $table->string('ppe_requirements');
            $table->string('precautionary_measure');
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
