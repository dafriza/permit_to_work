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
            $table->string('number');
            $table->string('work_order');
            $table->dateTime('date_application');
            $table->foreignId('request_pa')->constrained('users')->onDelete('cascade');
            $table->longText('sign_pa');
            $table->foreignId('direct_spv')->constrained('users')->onDelete('cascade');
            $table->longText('sign_spv');
            // $table->string('equipment_id');
            $table->string('location');
            $table->longText('task_description');
            $table->longText('tools_equipment');
            $table->longText('trades');
            $table->integer('personel_involved');
            $table->string('tra_level_1');
            $table->string('tra_level_2');
            $table->string('reference_no');
            $table->longText('hazard');
            $table->longText('controls');
            $table->longText('sscr');
            $table->longText('cross_referenced_certificates');
            $table->longText('authorisation');
            $table->longText('permit_registry');
            $table->longText('site_gas_test');
            $table->longText('issue');
            $table->longText('acceptance');
            $table->longText('close_out_pa');
            $table->longText('close_out_aa');
            $table->longText('registry_of_work_completion');
            // $table->longText('submission');
            // $table->longText('authorization_and_issuing');
            // $table->longText('completion');
            $table->tinyInteger('status')->comment('1 => on going, 2 => success, 3 => rejected, 4 => draft');
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
