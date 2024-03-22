<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personal_costs', function (Blueprint $table) {
            $table->id();
            $table->integer('person_id');
            $table->integer('cost_id');
            $table->integer('member_id');
            $table->float('meal');
            $table->integer('rome_rent_per');
            $table->integer('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_costs');
    }
};
