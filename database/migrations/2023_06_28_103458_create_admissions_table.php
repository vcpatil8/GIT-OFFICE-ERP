<?php

use App\Enums\CasteCategories;
use App\Enums\ModeOfAdmission;
use App\Enums\Programs;
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
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained();
            $table->string('degree')->default(Programs::BE_CS->value);
            $table->tinyInteger('ischange_of_branch')->default(0);
            $table->string('mode_of_admission')->default(ModeOfAdmission::CET->value);
            $table->string('allotted_Category')->default(CasteCategories::General->value);
            $table->string('academic_year');
            $table->string('category_on_certificate')->default(CasteCategories::General->value);
            $table->tinyInteger('isLateral');
            $table->string('joining_academic_year');
            $table->string('degree_year');
            $table->string('term_number');
            $table->string('section_number');
            $table->string('student_status');
            $table->string('degree_batch');
            $table->string('scheme');
            $table->date('date_of_admission');
            $table->unsignedInteger('roll_no');
            $table->string('claimed_cateogry')->defult(CasteCategories::General->value);
            $table->string('area_type');
            $table->tinyInteger('link_to_prominenet_position_person')->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
