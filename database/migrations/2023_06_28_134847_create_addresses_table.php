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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained();
            $table->string('house');
            $table->string('area');
            $table->string('building_name');
            $table->string('street');
            $table->foreignId('countries_id')->constrained();
            $table->foreignId('states_id')->constrained();
            $table->foreignId('districts_id')->constrained();
            $table->foreignId('taluks_id')->constrained();
            $table->string('city');
            $table->string('post');
            $table->smallInteger('pincode');
            $table->tinyInteger('is_same_local_address');
            $table->enum('address_type', ['Local', 'Permanent'])->default('Permanent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
