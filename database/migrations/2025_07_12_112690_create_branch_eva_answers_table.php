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
        Schema::create('branch_eva_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('branch_id')->constrained('branches')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('evaluation_form_id')->constrained('evaluation_forms')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('evaluation_question_id')->constrained('evaluation_questions')->onDelete('restrict')->onUpdate('cascade');
            $table->integer('score');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branch_eva_answers');
    }
};
