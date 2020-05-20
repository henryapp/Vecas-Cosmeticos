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
    //--------- RUTAS MENU ROL--------
    Route::get('menu-rol','MenuRolController@index')->name('menu_rol');
    Route::post('menu-rol','MenuRolController@guardar')->name('guardar_menu_rol');
    //--------- RUTAS PERMISO ROL--------
    Route::get('permiso-rol','PermisoRolController@index')->name('Permiso_rol');
    Route::post('permiso-rol','PermisoRolController@guardar')->name('guardar_permiso_rol');
});
/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
