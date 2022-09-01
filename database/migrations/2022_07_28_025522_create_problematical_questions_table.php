<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('problematical_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('number');
            $table->text('description');
            $table->unsignedBigInteger('subject_id');
            $table->timestamps();

            $table->foreign('subject_id')
                ->on('subjects')
                ->references('id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('problematizing_questions');
    }
};
