<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('standards', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->unsignedBigInteger('type_standard_id');
            $table->timestamps();

            $table->foreign('type_standard_id')
                ->on('type_standards')
                ->references('id')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('standards');
    }
};
