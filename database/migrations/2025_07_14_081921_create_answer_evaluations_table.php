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
        Schema::create('answer_evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evaluation_form_id')->constrained('evaluation_forms')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('evaluation_question_id')->constrained('evaluation_questions')->onDelete('restrict')->onUpdate('cascade');
            $table->integer('score');
            $table->date('evaluation_date');
            $table->morphs('answer_evaluationable', 'an_ev_morph_index'); // ✅ الاسم المختصر
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_evaluations');
    }
};
