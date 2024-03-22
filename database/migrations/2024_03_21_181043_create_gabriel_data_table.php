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
        Schema::create('gabriel_data', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->string('location');
            $table->string('occupation');
            $table->string('institution');
            $table->string('program');
            $table->string('hobbies');
            $table->string('email');
            $table->string('phone_number');
            $table->string('linkedin');
            $table->string('github');
            $table->string('mlsa');
            $table->string('company');
            $table->string('role');
            $table->string('startDate');
            $table->string('endDate');
            $table->string('responsabilities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gabriel_data');
    }
};
