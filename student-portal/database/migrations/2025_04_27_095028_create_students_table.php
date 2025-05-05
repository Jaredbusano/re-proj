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
            $table->string('student_id')->unique();
            $table->integer('age')->nullable(); // Adding 'age' (optional if not always present)
            $table->string('course')->nullable(); // Adding 'course' (optional if not always present)
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Linking to users table, cascade delete
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('address');
            $table->string('phone');
            $table->string('parent_name');
            $table->string('parent_phone');
            $table->string('grade_level');
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
