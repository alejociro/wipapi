<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->char('letter');
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('grade_id')
                ->on('grades')
                ->references('id');
            $table->foreign('user_id')
                ->on('users')
                ->references('id');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
