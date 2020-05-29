<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaProductoSubcategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_subcategoria', function (Blueprint $table) {
            $table->unsignedBigInteger('sub_categoria_id');
            $table->foreign('sub_categoria_id','fk_productoSubCategoria_subCategoria')->references('id')
            ->on('sub_categoria')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id','fk_productoSubCategoria_producto')->references('id')
            ->on('producto')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_subcategoria');
    }
}
