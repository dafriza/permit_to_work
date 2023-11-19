<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permit_to_works', function (Blueprint $table) {
            $table->id();
            // $table->string('number');
            // $table->string('work_order');
            $table->dateTime('date_application');
            $table->foreignId('request_pa')->constrained('users')->onDelete('cascade');
            $table->foreignId('direct_spv')->constrained('users')->onDelete('cascade');
            $table->string('equipment_id');
            $table->string('location');
            $table->longText('task_description');
            $table->longText('tools_equipment');
            $table->string('trades');
            $table->integer('personel_involved');
            $table->integer('tra_level');
            $table->string('reference_no');
            $table->longText('hazard');
            $table->longText('controls');
            $table->longText('cross_referenced_certificates');
            $table->longText('submission');
            $table->longText('authorization_and_issuing');
            $table->longText('completion');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permit_to_works');
    }
};
