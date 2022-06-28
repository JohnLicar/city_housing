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
        Schema::table('applicants_infos', function (Blueprint $table) {
            $table->string('place_of_birth');
            $table->string('citizenship');
            $table->string('tin_no')->nullable();
            $table->string('contact')->nullable();
            $table->string('govt_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applicants_infos', function (Blueprint $table) {
            //
        });
    }
};
