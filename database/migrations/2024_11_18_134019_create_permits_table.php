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
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('job_location_id');
            $table->unsignedBigInteger('department_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('sub_location');
            $table->text('equipment_details');
            $table->text('job_description');
            $table->string('receiver_name');
            $table->string('contract_company')->nullable();
            $table->string('staff_id')->nullable();
            $table->string('risk_assessment')->nullable();
            $table->json('workers_names');
            $table->json('required_permits')->nullable();
            // $table->json('hazard_identification');
            // $table->json('job_requirements');
            // $table->json('ppe_requirements');
            // $table->json('precautionary_measure');
            $table->boolean('is_disclaimer')->default(0);

            // Correct foreign key references
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('job_location_id')->references('id')->on('job_locations')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');

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
