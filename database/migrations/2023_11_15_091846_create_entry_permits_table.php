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
        Schema::create('entry_permits', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('work_order');
            $table->longText('task_description');
            $table->longText('additional_permits');
            $table->longText('preparation_required');
            $table->longText('communication_method');
            $table->longText('h2s_initial_gas_testing');
            $table->longText('regular_gas_testing');
            $table->longText('authorization');
            $table->longText('permit_cancellation');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
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
        Schema::dropIfExists('entry_permits');
    }
};
