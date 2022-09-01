<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name',55);
            $table->unsignedBigInteger('area_id');
            $table->timestamps();

            $table->foreign('area_id')
                ->on('areas')
                ->references('id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('asignatures');
    }
};
