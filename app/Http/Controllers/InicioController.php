<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sell;
use App\Models\Product;
use App\Models\Operationtype;


class InicioController extends Controller
{

    public function index()
    {
        return view('inicio.index');
    }


    public function create()
    {

    }


    public function store(Request $request)
    {

    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

        
    }

    public function destroy($id)
    {
        
    }

      public function recovery($id)
    {
    
    }

      public function delete($id)
    {
    
    }


}
