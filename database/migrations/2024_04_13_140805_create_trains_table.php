<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // azienda
            $table->string('agency');

            // stazione di partenza
            $table->string('departure');

            // stazione d'arrivo
            $table->string('arrival');

            // orario di partenza
            $table->dateTime('departure_time');

            // orario d'arrivo
            $table->dateTime('arrival_time');

            // codice
            $table->string('train_code', 6);

            // carrozze
            $table->tinyInteger('carriages');

            // in orario
            $table->boolean('is_on_time');

            // cancellato
            $table->boolean('is_canceled');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
