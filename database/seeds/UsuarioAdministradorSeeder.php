<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
            'usuario'=>'admin',
            'password'=>bcrypt('vecas.admin'),
            'nombre'=>'Administrador',
            'email'=>'vecas.cosmetico@gmail.com'
        ]);

       DB::table('usuario')->insert([
            'usuario'=>'henry.perez',
            'password'=>bcrypt('u$adm1n1'),
            'nombre'=>'Henry Adonai Perez y Perez',
            'email'=>'henryapp89@gmail.com'
        ]);

         DB::table('usuario_rol')->insert([
            'rol_id'=>1,
            'usuario_id'=>1,
            'estado'=>1,
        ]);
        DB::table('usuario_rol')->insert([
            'rol_id'=>2,
            'usuario_id'=>2,
            'estado'=>1,
        ]);
    }
}
