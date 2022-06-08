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
        Schema::create('visita_eventuals', function (Blueprint $table) {
            $table->id();

            $table->foreignId("tipo_visita_id")->constrained("tipo_visitas");

            $table->string("nombre");
            $table->string("notas");



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
        Schema::dropIfExists('visita_eventuals');
    }
};
