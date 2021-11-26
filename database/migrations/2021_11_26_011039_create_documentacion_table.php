<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentacion', function (Blueprint $table) {
            $table->id('id_documentacion');
            $table->unsignedBigInteger('id_departamento');
            $table->unsignedBigInteger('id_carpetas');
            $table->string('tipo_documento');
            $table->string('descripcion');
            $table->date('fecha');
            $table->string('observaciones');
            $table->string('estado');
            $table->foreign('id_departamento')->references('id_departamento')->on('departamento');
            $table->foreign('id_carpetas')->references('id_carpetas')->on('carpetas');
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
        Schema::dropIfExists('documentacion');
    }
}
