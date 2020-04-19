<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaKardex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kardex', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id','fk_kardex_producto')->references('id')
            ->on('producto')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('detalle_compra_id');
            $table->foreign('detalle_compra_id','fk_kardex_detallecompra')->references('id')
            ->on('detalle_compra')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('detalle_entrada_id');
            $table->foreign('detalle_entrada_id','fk_kardex_detalleEntrada')->references('id')
            ->on('detalle_entrada')->onDelete('restrict')->onUpdate('restrict');
            $table->char('tipo',1);
            $table->integer('cantidad');
            $table->decimal('total_compra',8,2);
            $table->decimal('precio_unitario',8,2);
            $table->decimal('precio_venta',8,2);
            $table->unsignedTinyInteger('existencia_anterior');
            $table->unsignedTinyInteger('existencia_actual');
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
        Schema::dropIfExists('kardex');
    }
}
