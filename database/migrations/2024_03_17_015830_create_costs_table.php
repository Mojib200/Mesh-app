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
        Schema::create('costs', function (Blueprint $table) {
            $table->id();
            $table->integer('room_rent');
            $table->integer('gas_current');
            $table->integer('aunty_salary');
            $table->integer('wi_fi');
            $table->integer('water');
            $table->integer('caretaker');
            $table->integer('exta');
            $table->integer('total');
            $table->integer('per_new_total');
            $table->integer('per_old_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costs');
    }
};
