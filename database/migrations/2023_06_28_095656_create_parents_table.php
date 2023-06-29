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
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained();
            $table->string('title');
            $table->string('name');
            $table->string('occupation');
            $table->string('mobile_no');
            $table->enum('relationship', ['father', 'mother']);
            $table->string('email');
            $table->unsignedDouble('income');
            $table->tinyInteger('age');
            $table->string('pancard');
            $table->string('alt_mobile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parents');
    }
};
