<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPermisosRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos_rol', function (Blueprint $table) {
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id','fk_permisorol_rol')->references('id')->on('rol')
            ->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('permiso_id');
            $table->foreign('permiso_id','fk_permisosrol_permisos')->references('id')->on('permisos')
            ->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('permisos_rol');
    }
}
