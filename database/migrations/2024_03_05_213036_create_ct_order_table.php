<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Wzrd\CalandraTexDomain\Model\CtOrder\PresentationInterface;
use Wzrd\CalandraTexDomain\Model\CtOrder\CaraBuenaInterface;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ct_order', function (Blueprint $table) {
            $table->id();
            // CLIENTES CREAR RELACION CON GUARD -> CREAR TABLA
            $table->integer('albaran');
            // ACABADOS -> CREAR TABLA
            $table->integer('rollos');
            $table->integer('piezas');
            $table->integer('metros');
            $table->float('ancho_entrada');
            $table->float('ancho_final');
            $table->enum('presentacion', PresentationInterface::VALUES);
            $table->string('cortar_a');
            $table->enum('cara_buena', CaraBuenaInterface::VALUES);
            $table->boolean('cinta');
            $table->boolean('tablilla');
            $table->string('num_bolo');
            // ETIQUETA -> CREAR TABLA
            $table->string('piezas_de');
            $table->string('observaciones_1');
            $table->string('observaciones_2');
            $table->string('observaciones_3');
            $table->string('observaciones_4');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ct_order');
    }
};
