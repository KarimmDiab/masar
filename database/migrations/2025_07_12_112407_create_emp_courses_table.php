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
        Schema::create('emp_courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('emp_id')->constrained('emps')->onDelete('cascade')->onUpdate('cascade');
            $table->string('prvided_by');
            $table->date('course_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emp_courses');
    }
};
