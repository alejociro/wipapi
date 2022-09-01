<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('plan_clone_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('activity_plan_clone_id')->nullable();
            $table->unsignedBigInteger('area_plan_clone_id');
            $table->timestamps();

            $table->foreign('area_plan_clone_id')
                ->on('area_plan_clones')
                ->references('id');
            $table->foreign('activity_plan_clone_id')
                ->on('plan_clone_activities')
                ->references('id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('plan_clone_tasks');
    }
};
