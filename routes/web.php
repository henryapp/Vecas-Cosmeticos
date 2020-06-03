<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('admin/permiso','Admin\PermisoController@index')->name('permiso');
/*
Route::get('/','InicioController@index')->name('inicio');
Route::get('home','HomeController@index')->name('home-inicio')->middleware('verified');*/


Route::get('/','HomeController@index')->name('home-inicio');

//---------LOGIN---------
Route::get('seguridad/login','Seguridad\LoginController@index')->name('login-inicio');
Route::post('seguridad/login','Seguridad\LoginController@login')->name('login-post');
Route::get('seguridad/logout', 'Seguridad\LoginController@logout')->name('logout');
Route::get('seguridad/register', 'Seguridad\RegisterController@index')->name('register-inicio');
Route::post('seguridad/register', 'Seguridad\RegisterController@register')->name('register-post');
Auth::routes(['verify' => true]);

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','superadmin']],function(){
    Route::get('','AdminController@index');
    Route::get('permiso','PermisoController@index')->name('permiso');
    Route::get('permiso/crear','PermisoController@crear')->name('crear_permiso');
    Route::post('permiso','PermisoController@guardar')->name('guardar_permiso');
    Route::get('permiso/{id}/editar','PermisoController@editar')->name('editar_permiso');
    Route::put('permiso/{id}','PermisoController@actualizar')->name('actualizar_permiso');
    Route::delete('permiso/{id}/eliminar','PermisoController@eliminar')->name('eliminar_permiso');
    //-------RUTAS MENU-------
    Route::get('menu','MenuController@index')->name('menu');
    Route::get('menu/crear','MenuController@crear')->name('crear_menu');
    Route::get('menu/{id}/editar','MenuController@editar')->name('editar_menu');
    Route::put('menu/{id}','MenuController@actualizar')->name('actualizar_menu');
    Route::post('menu','MenuController@guardar')->name('guardar_menu');
    Route::get('menu/{id}/eliminar','MenuController@eliminar')->name('eliminar_menu');
    Route::post('menu/guardar-orden','MenuController@guardarOrden')->name('guardar_orden');
    //------- RUTAS ROL ------
    Route::get('rol','RolController@index')->name('rol');
    Route::get('rol/crear','RolController@crear')->name('crear_rol');
    Route::post('rol','RolController@guardar')->name('guardar_rol');
    Route::get('rol/{id}/editar','RolController@editar')->name('editar_rol');
    Route::put('rol/{id}','RolController@actualizar')->name('actualizar_rol');
    Route::delete('rol/{id}','RolController@eliminar')->name('eliminar_rol');
    //------------Estado-------------
    Route::get('estado','EstadoController@index')->name('estado');
    Route::get('estado/crear','EstadoController@crear')->name('crear_estado');
    Route::post('estado','EstadoController@guardar')->name('guardar_estado');
    Route::get('estado/{id}/editar','EstadoController@editar')->name('editar_estado');
    Route::put('estado/{id}','EstadoController@actualizar')->name('actualizar_estado');
    Route::delete('estado/{id}','EstadoController@eliminar')->name('eliminar_estado');
    //--------- RUTAS MENU ROL--------
    Route::get('menu-rol','MenuRolController@index')->name('menu_rol');
    Route::post('menu-rol','MenuRolController@guardar')->name('guardar_menu_rol');
    //--------- RUTAS PERMISO ROL-----
    Route::get('permiso-rol','PermisoRolController@index')->name('Permiso_rol');
    Route::post('permiso-rol','PermisoRolController@guardar')->name('guardar_permiso_rol');
});
//------------PRODUCTO----------------
Route::get('producto','ProductoController@index')->name('producto');
Route::get('producto/crear','ProductoController@crear')->name('crear_producto');
Route::post('producto','ProductoController@guardar')->name('guardar_producto');
Route::get('producto/{id}/editar','ProductoController@editar')->name('editar_producto');
Route::put('producto/{id}','ProductoController@actualizar')->name('actualizar_producto');
Route::delete('producto/{id}','ProductoController@eliminar')->name('eliminar_producto');
Route::get('categoria/sub_categorias/{id}','ProductoController@sub_categorias')->name('obtener_sub_categorias');
//------------MARCA--------------------
Route::get('marca','MarcaController@index')->name('marca');
Route::get('marca/crear','MarcaController@crear')->name('crear_marca');
Route::post('marca','MarcaController@guardar')->name('guardar_marca');
Route::get('marca/{id}/editar','MarcaController@editar')->name('editar_marca');
Route::put('marca/{id}','MarcaController@actualizar')->name('actualizar_marca');
Route::delete('marca/{id}','MarcaController@eliminar')->name('eliminar_marca');
//------------CATEGORIA--------------------
Route::get('categoria','CategoriaController@index')->name('categoria');
Route::get('categoria/crear','CategoriaController@crear')->name('crear_categoria');
Route::post('categoria','CategoriaController@guardar')->name('guardar_categoria');
Route::get('categoria/{id}/editar','CategoriaController@editar')->name('editar_categoria');
Route::put('categoria/{id}','CategoriaController@actualizar')->name('actualizar_categoria');
Route::delete('categoria/{id}','CategoriaController@eliminar')->name('eliminar_categoria');
//------------SUB CATEGORIA--------------------
Route::get('sub_categoria','SubCategoriaController@index')->name('sub_categoria');
Route::get('sub_categoria/crear','SubCategoriaController@crear')->name('crear_subcate');
Route::post('sub_categoria','SubCategoriaController@guardar')->name('guardar_subcate');
Route::get('sub_categoria/{id}/editar','SubCategoriaController@editar')->name('editar_subcate');
Route::put('sub_categoria/{id}','SubCategoriaController@actualizar')->name('actualizar_subcate');
Route::delete('sub_categoria/{id}','SubCategoriaController@eliminar')->name('eliminar_subcate');
/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
