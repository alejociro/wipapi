<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('plan_clone_references', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('value');
            $table->string('author');
            $table->unsignedBigInteger('area_plan_clone_id');
            $table->timestamps();

            $table->foreign('area_plan_clone_id')
                ->on('area_plan_clones')
                ->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_clone_references');
    }
};
