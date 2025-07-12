<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('emps', function (Blueprint $table) {
            $table->id();
            $table->string('agent_code');
            $table->string('name');
            $table->string('national_id', 14)->unique();
            $table->enum('gender', ['M', 'F']);
            $table->date('birth_date');
            $table->string('phone', 11);
            $table->date('hiring_date');
            $table->foreignId('marital_statis_id')->constrained('marital_satatuses')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('working_hour_id')->constrained('working_hours')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('job_title_id')->constrained('job_titles')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('contract_id')->constrained('contracts')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('section_id')->constrained('sections')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('branch_id')->constrained('branches')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('main_department_id')->constrained('main_departments')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('sub_department_id')->constrained('sub_departments')->onDelete('restrict')->onUpdate('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emps');
    }
};
