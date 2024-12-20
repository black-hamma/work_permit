<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHazardIdentificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hazard_identifications', function (Blueprint $table) {
            $table->id();
            $table->string('hazard_identification');
            $table->timestamps();
        });

        Schema::create('hazard_identification_permit', function (Blueprint $table) {
            $table->id();
            $table->foreignId('safety_permits_id')->constrained()->onDelete('cascade');
            $table->foreignId('hazard_identification_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('hazard_identifications');
        Schema::dropIfExists('hazard_identification_permit');
    }
}
