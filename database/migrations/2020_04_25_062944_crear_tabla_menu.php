<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_id')->default(0);
            $table->string('nombre',50);
            $table->string('url',100);
            $table->unsignedInteger('orden')->default(0);
            $table->string('icono',50)->nullable();
            $table->string('tipo_menu',50);
            $table->charset='utf8mb4';
            $table->collation='utf8mb4_spanish_ci';    
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
        Schema::dropIfExists('menu');
    }
}
