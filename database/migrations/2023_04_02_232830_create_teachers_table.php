<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('user_id');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('group_id')
                ->on('groups')
                ->references('id');

            $table->foreign('user_id')
                ->on('users')
                ->references('id');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
