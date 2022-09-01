<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tasks_area_plans', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('activity_id')->nullable();
            $table->unsignedBigInteger('area_plan_id');
            $table->timestamps();

            $table->foreign('area_plan_id')
                ->on('area_plans')
                ->references('id');
            $table->foreign('activity_id')
                ->on('activities_area_plans')
                ->references('id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tasks_area_plans');
    }
};
