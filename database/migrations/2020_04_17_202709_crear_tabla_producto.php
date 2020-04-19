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
            $table->unsignedBigInteger('sub_categoria_id');
            $table->foreign('sub_categoria_id','fk_producto_subCategoria')->references('id')
            ->on('sub_categoria')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('imagen_id');
            $table->foreign('imagen_id','fk_producto_imagenProducto')->references('id')
            ->on('imagen_producto')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id','fk_producto_estado')->references('id')
            ->on('estado')->onDelete('restrict')->onUpdate('restrict');
            $table->string('nombre_producto',50);
            $table->unsignedTinyInteger('existencia');
            $table->text('descripcion');
            $table->decimal('precio_costo',8,2);
            $table->decimal('precio_venta',8,2);
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
        Schema::dropIfExists('producto');
    }
}
