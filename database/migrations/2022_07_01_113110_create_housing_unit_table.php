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
        Schema::create('housing_unit', function (Blueprint $table) {
            $table->id();
            $table->foreignId('housing_project_id')->constrained('housing_projects');
            $table->string('block_no');
            $table->string('lot_no');
            $table->string('phase_no')->nullable();
            $table->string('remark')->nullable();
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
        Schema::dropIfExists('housing_unit');
    }
};
