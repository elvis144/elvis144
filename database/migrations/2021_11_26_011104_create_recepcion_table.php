<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecepcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recepcion', function (Blueprint $table) {
            $table->id('id_recepcion');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_documentacion');
            $table->string('descripcion');
            $table->date('fecha_recepcion');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuario');
            $table->foreign('id_documentacion')->references('id_documentacion')->on('documentacion');
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
        Schema::dropIfExists('recepcion');
    }
}
