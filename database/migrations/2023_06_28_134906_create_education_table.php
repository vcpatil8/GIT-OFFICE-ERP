<?php

use App\Enums\EducationEvaluationType;
use App\Enums\EducationLevels;
use App\Enums\EducationSpecializations;
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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained();
            $table->string('level')->default(EducationLevels::XII->value);
            $table->string('institution');
            $table->string('board');
            $table->string('registration_no');
            $table->smallInteger('year_of_passing');
            $table->string('month_of_passing');
            $table->string('medium');
            $table->unsignedBigInteger('marks_card_no');
            $table->tinyInteger('no_of_attempts');
            $table->enum('has_studied_kannada_in_X', ['Yes', 'No'])->default('Yes');
            $table->enum('has_studied_english_in_XII', ['Yes', 'No'])->default('Yes');
            $table->foreignId('countries_id')->constrained();
            $table->foreignId('states_id')->constrained();
            $table->foreignId('districts_id')->constrained();
            $table->foreignId('taluks_id')->constrained();
            $table->string('city');
            $table->string('evaluation_type')->default(EducationEvaluationType::MARKS->value);
            $table->double('obtained_marks');
            $table->smallInteger('total');
            $table->double('percentage');
            $table->string('stream');
            $table->tinyInteger('physics_marks_obtained');
            $table->tinyInteger('physics_max_marks');
            $table->tinyInteger('maths_marks_obtained');
            $table->tinyInteger('maths_max_marks');
            $table->string('specialization')->default(EducationSpecializations::CHE->value);
            $table->tinyInteger('specialization_marks_obtained');
            $table->tinyInteger('specialization_max_marks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
