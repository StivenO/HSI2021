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






Route::group(['middleware' => 'auth'], function () {


Route::get('product', [ProductController::class, 'index']);


    // Route::get('product/show/{idproduct}', [ProductController::class, 'show']); No Hay Necesidad *DE MOMENTO*

    Route::get('product/new', [ProductController::class, 'create']);
    Route::post('product', [ProductController::class, 'store']);

    Route::get('product/edit/{idproduct}', [ProductController::class, 'edit']);
    Route::post('product/edit/{idproduct}', [ProductController::class, 'update']);


    Route::get('product/destroy/{idproduct}', [ProductController::class, 'destroy']);
    Route::get('product/recovery/{idproduct}', [ProductController::class, 'recovery']);
    Route::get('product/delete/{idproduct}', [ProductController::class, 'delete']);

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

    Route::get('h_abastecimiento', [H_abastecimientoController::class, 'index']);

    //Route::get('h_ventas/new', [SellController::class, 'create']);
    //Route::post('h_ventas', [SellController::class, 'store']);

    // Route::get('h_ventas/editar/{idsell}', [SellController::class, 'edit']);
    // Route::post('h_ventas/editar/{idsell}', [SellController::class, 'update']);


    // Route::get('h_ventas/destroy/{idsell}', [SellController::class, 'destroy']);
    // Route::get('h_ventas/recovery/{idsell}', [SellController::class, 'recovery']);
    // Route::get('h_ventas/delete/{idsell}', [SellController::class, 'delete']);


    //  Inicio ----------------------------------------------------------------------
    Route::get('inicio', [InicioController::class, 'index']);

});