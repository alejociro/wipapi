<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activies_creative_agendas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plan_creative_agenda_id');
            $table->string('title');
            $table->text('description');
            $table->timestamps();

            $table->foreign('plan_creative_agenda_id')
                ->on('plan_creative_agendas')
                ->references('id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activies_creative_agendas');
    }
};
