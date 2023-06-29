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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('TUSN')->unique();
            $table->string('USN')->unique();
            $table->string('UID')->unique();
            $table->string('college_email_id')->unique();
            $table->date('dob');
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->enum('blood_group', ['A+ve', 'A-ve', 'B+ve', 'B-ve', 'AB+ve', 'AB-ve', 'O+ve', 'O-ve']);
            $table->string('mobile_no', 13);
            $table->string('personal_email')->unique();
            $table->unsignedBigInteger('adhar_card')->unique();
            $table->foreignId('country_of_origin_id')->nullable()->constrained('countries');
            $table->foreignId('nationality_id')->constrained('countries');
            $table->string('mothertongue');
            $table->foreignId('religions_id')->constrained();
            $table->foreignId('castes_id')->constrained();
            $table->foreignId('subcastes_id')->constrained();
            $table->string('identity_mark');
            $table->foreignId('birth_countries_id')->constrained('countries');
            $table->foreignId('birth_states_id')->constrained('states');
            $table->foreignId('birth_districts_id')->constrained('districts');
            $table->foreignId('birth_taluks_id')->constrained('taluks');
            $table->string('place_of_birth');
            $table->string('name_x_cert');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('awards');
            $table->tinyInteger('is_economicallybackward');
            $table->string('emergency_contact');
            $table->string('emergency_phone_std');
            $table->string('emergency_alt_no');
            $table->tinyInteger('is_change_of_college');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
