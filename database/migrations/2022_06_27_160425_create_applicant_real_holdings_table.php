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
        Schema::create('applicant_real_holdings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicants_id')->constrained('applicants');
            $table->foreignId('real_holdings_id')->constrained('real_holdings');
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
        Schema::dropIfExists('applicant_real_holdings');
    }
};
