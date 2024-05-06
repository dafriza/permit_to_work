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
            $table->string('number')->nullable();
            $table->string('work_order')->nullable();
            $table->dateTime('date_application')->nullable();
            $table->foreignId('request_pa')->nullable()->constrained('users')->onDelete('cascade');
            $table->longText('sign_pa')->nullable();
            $table->foreignId('direct_spv')->nullable()->constrained('users')->onDelete('cascade');
            $table->longText('sign_spv')->nullable();
            $table->string('equipment_id');
            $table->string('location')->nullable();
            $table->longText('task_description')->nullable();
            $table->longText('tools_equipment')->nullable();
            $table->longText('trades')->nullable();
            $table->integer('personel_involved')->nullable();
            $table->string('tra_level')->nullable();
            // $table->string('tra_level_2')->nullable();
            $table->string('reference_no')->nullable();
            $table->longText('hazard')->nullable();
            $table->longText('controls')->nullable();
            $table->longText('sscr')->nullable();
            $table->longText('cross_referenced_certificates')->nullable();
            $table->longText('authorisation')->nullable();
            $table->longText('permit_registry')->nullable();
            $table->longText('site_gas_test')->nullable();
            $table->longText('issue')->nullable();
            $table->longText('acceptance')->nullable();
            $table->longText('close_out_pa')->nullable();
            $table->longText('close_out_aa')->nullable();
            $table->longText('registry_of_work_completion')->nullable();
            // $table->longText('submission');
            // $table->longText('authorization_and_issuing');
            // $table->longText('completion');
            $table->tinyInteger('status')->comment('1 => on going, 2 => success, 3 => rejected, 4 => draft');
            $table->string('status_ptw')->nullable();
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
