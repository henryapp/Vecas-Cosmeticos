<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaCompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id','fk_compra_usuario')->references('id')
            ->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('tipo_pago_id');
            $table->foreign('tipo_pago_id','fk_compra_tipoPago')->references('id')
            ->on('tipo_pago')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('domicilio_id');
            $table->foreign('domicilio_id','fk_compra_domicilio')->references('id')
            ->on('domicilio')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id','fk_compra_estado')->references('id')
            ->on('estado')->onDelete('restrict')->onUpdate('restrict');
            $table->dateTime('fecha_compra',0);
            $table->decimal('total_pagar',8,2);
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
        Schema::dropIfExists('compra');
    }
}
