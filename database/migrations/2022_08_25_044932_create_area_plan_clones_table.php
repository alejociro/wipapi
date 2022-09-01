<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('area_plan_clones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('question')->nullable();
            $table->json('orientations')->nullable();
            $table->json('adaptations')->nullable();
            $table->unsignedBigInteger('user_clone');
            $table->unsignedBigInteger('area_plan_id');
            $table->unsignedBigInteger('group_id');

            $table->foreign('area_plan_id')
                ->on('area_plans')
                ->references('id');

            $table->foreign('user_clone')
                ->on('users')
                ->references('id');

            $table->foreign('group_id')
                ->on('groups')
                ->references('id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('area_plan_childrens');
    }
};
