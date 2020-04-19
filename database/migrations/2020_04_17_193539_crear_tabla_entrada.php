<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaEntrada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id','fk_entrada_estado')->references('id')
            ->on('estado')->onDelete('restrict')->onUpdate('restrict');
            $table->dateTime('fecha_entrada',0);
            $table->decimal('total_compra',8,2);
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
        Schema::dropIfExists('entrada');
    }
}
