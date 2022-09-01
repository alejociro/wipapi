<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('name', 55);
            $table->unsignedBigInteger('grade_id');
            $table->timestamps();

            $table->foreign('grade_id')
                ->on('grades')
                ->references('id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('areas');
    }
};
