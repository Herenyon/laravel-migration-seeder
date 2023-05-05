<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 20);
            $table->string('stazione_di_partenza', 20);
            $table->string('stazione_di_arrivo', 20);
            $table->dateTime('orario_di_partenza', 0);
            $table->dateTime('orario_di_arrivo', 0);
            $table->char('codice_treno', 5);
            $table->char('numero_carrozze', 2);
            $table->boolean('in_orario');
            $table->boolean('cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
