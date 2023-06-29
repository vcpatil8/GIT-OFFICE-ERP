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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained();
            $table->string('caste_certificate');
            $table->string('income_certificate');
            $table->string('entrance_text_rank_card');
            $table->string('conduct_certificate');
            $table->string('study_certificate');
            $table->string('migration_certificate');
            $table->string('student_thumb_impression');
            $table->string('parent_signature');
            $table->string('adhar_card');
            $table->string('cet_comed_K_admission_letter');
            $table->string('transfer_certificate');
            $table->string('medical_certificate');
            $table->string('visa_document');
            $table->string('passport');
            $table->string('rural_service_bond');
            $table->string('domicile_certificate');
            $table->string('ews');
            $table->string('category');
            $table->string('father_adhar');
            $table->string('mother_adhar');
            $table->string('x_original_marks_card');
            $table->string('xii_original_marks_card');
            $table->string('diploma_provisional_marks_card');
            $table->string('diploma_original_marks_card');
            $table->string('diploma_provisional_certificate');
            $table->string('diploma_original_certificate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
