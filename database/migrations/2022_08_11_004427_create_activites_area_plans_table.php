<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activities_area_plans', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('area_plan_id');
            $table->timestamps();

            $table->foreign('area_plan_id')
                ->on('area_plans')
                ->references('id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activites_area_plans');
    }
};
