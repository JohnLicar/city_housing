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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicants_info_id')->constrained('applicants');
            $table->foreignId('spouse_id')->constrained('spouses');
            $table->foreignId('housing_project_id')->constrained('housing_projects');
            $table->foreignId('real_holding_id')->constrained('real_holdings');
            $table->foreignId('application_status_id')->constrained('application_status');
            $table->softDeletes();
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
        Schema::dropIfExists('applicants');
    }
};
