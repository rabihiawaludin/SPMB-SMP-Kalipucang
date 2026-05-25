<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {

            $table->id();

            $table->string('registration_number')->unique();
            $table->string('fullname');
            $table->string('nik', 16);
            $table->string('nisn');
            $table->date('birth_date');
            $table->string('birth_place');
            $table->enum('gender', ['L', 'P']);
            $table->string('religion');
            $table->string('phone');
            $table->text('address');
            $table->string('school_origin');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('parent_phone');
            $table->string('photo')->nullable();

            $table->enum('verification_status', [
                'pending',
                'verified',
                'rejected'
            ])->default('pending');

            $table->enum('accepted_status', [
                'waiting',
                'accepted',
                'rejected'
            ])->default('waiting');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};