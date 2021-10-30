<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\OperationtypeController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\H_ventasController;
use App\Http\Controllers\H_abastecimientoController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\TypeidController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\RolController;
use App\Http\Middleware\Admin;

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

Route::get('/', function () {
    return view('login');
});

// Login Register etc (fuera de la aplicacion) --------------------------------------------------------------------

Route::get('login', [LoginController::class, 'index'])->name('login');


Route::get('register', [LoginController::class, 'create']);
Route::post('register', [LoginController::class, 'store']);

Route::post('validate', [LoginController::class, 'check']);






Route::group(['middleware' => ['auth', 'prevent-back-history']], function () {

    // Cerrar sesion ------------------------------------------------------
    Route::get('logout', [LoginController::class, 'logout']);



    // categoria --------------------------------------------------------------------


    Route::get('category', [CategoryController::class, 'index']);

    // Route::get('category/show/{idcategory}', [CategoryController::class, 'show']); No Hay Necesidad *DE MOMENTO*

    Route::get('category/new', [CategoryController::class, 'create']);
    Route::post('category', [CategoryController::class, 'store']);

    Route::get('category/edit/{idcategory}', [CategoryController::class, 'edit']);
    Route::post('category/edit/{idcategory}', [CategoryController::class, 'update']);


    Route::get('category/destroy/{idcategory}', [CategoryController::class, 'destroy']);
    Route::get('category/recovery/{idcategory}', [CategoryController::class, 'recovery']);
    Route::get('category/delete/{idcategory}', [CategoryController::class, 'delete']);

    //  Unidad ----------------------------------------------------------------------


    Route::get('unit', [UnitController::class, 'index']);

    // Route::get('unit/show/{idunit}', [UnitController::class, 'show']); No Hay Necesidad *DE MOMENTO*

    Route::get('unit/new', [UnitController::class, 'create']);
    Route::post('unit', [UnitController::class, 'store']);

    Route::get('unit/edit/{idunit}', [UnitController::class, 'edit']);
    Route::post('unit/edit/{idunit}', [UnitController::class, 'update']);


    Route::get('unit/destroy/{idunit}', [UnitController::class, 'destroy']);
    Route::get('unit/recovery/{idunit}', [UnitController::class, 'recovery']);
    Route::get('unit/delete/{idunit}', [UnitController::class, 'delete']);

    //  Tipo de operacion ----------------------------------------------------------------------


    Route::get('operationtype', [OperationtypeController::class, 'index']);

    // Route::get('operationtype/show/{idoperationtype}', [OperationtypeController::class, 'show']); No Hay Necesidad *DE MOMENTO*

    Route::get('operationtype/new', [OperationtypeController::class, 'create']);
    Route::post('operationtype', [OperationtypeController::class, 'store']);

    Route::get('operationtype/edit/{idoperationtype}', [OperationtypeController::class, 'edit']);
    Route::post('operationtype/edit/{idoperationtype}', [OperationtypeController::class, 'update']);


    Route::get('operationtype/destroy/{idoperationtype}', [OperationtypeController::class, 'destroy']);
    Route::get('operationtype/recovery/{idoperationtype}', [OperationtypeController::class, 'recovery']);
    Route::get('operationtype/delete/{idoperationtype}', [OperationtypeController::class, 'delete']);

    // (sell) ----------------------------------------------------------------------

    Route::get('sell', [SellController::class, 'index']);

    Route::get('sell/new', [SellController::class, 'create']);
    Route::post('sell', [SellController::class, 'store']);

    Route::get('sell/editar/{idsell}', [SellController::class, 'edit']);
    Route::post('sell/editar/{idsell}', [SellController::class, 'update']);


    Route::get('sell/destroy/{idsell}', [SellController::class, 'destroy']);
    Route::get('sell/recovery/{idsell}', [SellController::class, 'recovery']);
    Route::get('sell/delete/{idsell}', [SellController::class, 'delete']);

    //  Ventas (sell) ----------------------------------------------------------------------

    Route::get('h_ventas', [H_ventasController::class, 'index']);

    Route::get('h_ventas/new', [H_ventasController::class, 'create']);
    Route::post('h_ventas', [H_ventasController::class, 'store']);

    Route::get('h_ventas/editar/{idsell}', [H_ventasController::class, 'edit']);
    Route::post('h_ventas/editar/{idsell}', [H_ventasController::class, 'update']);


    Route::get('h_ventas/destroy/{idsell}', [H_ventasController::class, 'destroy']);
    Route::get('h_ventas/recovery/{idsell}', [H_ventasController::class, 'recovery']);
    Route::get('h_ventas/delete/{idsell}', [H_ventasController::class, 'delete']);

    //  abastecimiento (sell) ----------------------------------------------------------------------


    //Route::get('h_ventas/new', [SellController::class, 'create']);
    //Route::post('h_ventas', [SellController::class, 'store']);

    // Route::get('h_ventas/editar/{idsell}', [SellController::class, 'edit']);
    // Route::post('h_ventas/editar/{idsell}', [SellController::class, 'update']);


    // Route::get('h_ventas/destroy/{idsell}', [SellController::class, 'destroy']);
    // Route::get('h_ventas/recovery/{idsell}', [SellController::class, 'recovery']);
    // Route::get('h_ventas/delete/{idsell}', [SellController::class, 'delete']);


    //  Inicio ----------------------------------------------------------------------
    Route::get('inicio', [InicioController::class, 'index']);



    Route::get('inicio', [InicioController::class, 'index']);

    //  Perfil ----------------------------------------------------------------------

    Route::get('perfil', [PerfilController::class, 'index']);


    //  Tipo de Identificacion ----------------------------------------------------------------------


    Route::get('typeid', [TypeidController::class, 'index']);

    // Route::get('operationtype/show/{idoperationtype}', [OperationtypeController::class, 'show']); No Hay Necesidad DE MOMENTO

    Route::get('typeid/new', [TypeidController::class, 'create']);
    Route::post('typeid', [TypeidController::class, 'store']);

    Route::get('typeid/edit/{idtypeid}', [TypeidController::class, 'edit']);
    Route::post('typeid/edit/{idtypeid}', [TypeidController::class, 'update']);


    Route::get('typeid/destroy/{idtypeid}', [TypeidController::class, 'destroy']);
    Route::get('typeid/recovery/{idtypeid}', [TypeidController::class, 'recovery']);
    Route::get('typeid/delete/{idtypeid}', [TypeidController::class, 'delete']);

    //Personas------------------------------------------------------------------------

    Route::get('person', [PersonController::class, 'index']);

    Route::get('person/new', [PersonController::class, 'create']);
    Route::post('person', [PersonController::class, 'store']);

    Route::get('person/edit/{idperson}', [PersonController::class, 'edit']);
    Route::post('person/edit/{idperson}', [PersonController::class, 'update']);


    Route::get('person/destroy/{idperson}', [PersonController::class, 'destroy']);
    Route::get('person/recovery/{idperson}', [PersonController::class, 'recovery']);
    Route::get('person/delete/{idperson}', [PersonController::class, 'delete']);

//Rol---------------------------------------------------------------------

    Route::get('rol', [RolController::class, 'index']);

    Route::get('rol/new', [RolController::class, 'create']);
    Route::post('rol', [RolController::class, 'store']);

    Route::get('rol/edit/{idrol}', [RolController::class, 'edit']);
    Route::post('rol/edit/{idrol}', [RolController::class, 'update']);


    Route::get('rol/destroy/{idrol}', [RolController::class, 'destroy']);
    Route::get('rol/recovery/{idrol}', [RolController::class, 'recovery']);
    Route::get('rol/delete/{idrol}', [RolController::class, 'delete']);
});
Route::group(['middleware' => ['auth', 'prevent-back-history', 'admin']], function () {
    // productos --------------------------------------------------

    Route::get('product', [ProductController::class, 'index']);


    // Route::get('product/show/{idproduct}', [ProductController::class, 'show']); No Hay Necesidad *DE MOMENTO*

    Route::get('product/new', [ProductController::class, 'create']);
    Route::post('product', [ProductController::class, 'store']);

    Route::get('product/edit/{idproduct}', [ProductController::class, 'edit']);
    Route::post('product/edit/{idproduct}', [ProductController::class, 'update']);


    Route::get('product/destroy/{idproduct}', [ProductController::class, 'destroy']);
    Route::get('product/recovery/{idproduct}', [ProductController::class, 'recovery']);
    Route::get('product/delete/{idproduct}', [ProductController::class, 'delete']);

    //  Usuarios ----------------------------------------------------------------------

    Route::get('user', [UserController::class, 'index']);

    Route::get('user/new', [UserController::class, 'create']);
    Route::post('user', [UserController::class, 'store']);

    Route::get('user/editar/{iduser}', [UserController::class, 'edit']);
    Route::post('user/editar/{iduser}', [UserController::class, 'update']);


    Route::get('user/destroy/{iduser}', [UserController::class, 'destroy']);
    Route::get('user/recovery/{iduser}', [UserController::class, 'recovery']);
    Route::get('user/delete/{iduser}', [UserController::class, 'delete']);
    
    //  Ventas (sell) ----------------------------------------------------------------------

    Route::get('h_ventas/caja', [H_ventasController::class, 'caja']);

    //  abastecimiento (sell) ----------------------------------------------------------------------

    Route::get('h_abastecimiento', [H_abastecimientoController::class, 'index']);
    Route::get('h_abastecimiento/abastecer', [H_abastecimientoController::class, 'abastecer']);

});
