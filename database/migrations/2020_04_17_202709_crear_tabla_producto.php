<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('marca_id');
            $table->foreign('marca_id','fk_producto_marca')->references('id')
            ->on('marca')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id','fk_producto_estado')->references('id')
            ->on('estado')->onDelete('restrict')->onUpdate('restrict');
            $table->string('nombre_producto',50);
            $table->unsignedTinyInteger('existencia');
            $table->text('descripcion');
            $table->decimal('precio_costo',8,2);
            $table->decimal('precio_venta',8,2);
            $table->string('foto', 100)->nullable();
            $table->timestamps();
            $table->charset='utf8mb4';
            $table->collation='utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
