<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sell;
use App\Models\Product;
use App\Models\Operationtype;


class H_ventasController extends Controller
{

    public function index()
    {
        $consulta=['state' => 1, 'opetype_id' => 1];
        $consulta2=['state' => 0, 'opetype_id' => 1];
        $data=Sell::where($consulta)->get();
        //$data = Tipo::all(); Trae todos.
        //$data = Sell::where('state', 1)->get();
        $data2 = Sell::where($consulta2)->get();
        return view('h_ventas.index', compact('data', 'data2') );
    }


    public function create()
    {
        $operaciones = Operationtype::where('state', 1)->get();
        $productos = Product::where('state', 1)->get();
        return view('h_ventas.new', compact('operaciones', 'productos'));
    }


    public function store(Request $request)
    {
        $data['person_id'] = $request->get('person_id');
        $data['user_id'] = $request->get('user_id');
        $data['opetype_id'] = 1;
        $data['product_id'] = $request->get('product_id');
        $data['cantproduct'] = $request->get('cantproduct');
        $data['cash'] = $request->get('cash');
        $data['disc'] = $request->get('disc');
        $data['date'] = $request->get('date');
        $data['total'] = $request->get('total');


        Sell::create($data);

        return redirect('h_ventas');
    }

    public function show($id)
    {
        //
    }
    public function caja()
    {
        return view('h_ventas.caja');
    }

    public function edit($id)
    {
        $operaciones = Operationtype::where('state', 1)->get();
        $productos = Product::where('state', 1)->get();
        $data = Sell::find($id);
        return view('h_ventas.edit', compact('data', 'operaciones', 'productos'));
    }

    public function update(Request $request, $id)
    {

        $data['person_id'] = $request->get('person_id');
        $data['user_id'] = $request->get('user_id');
        $data['opetype_id'] = $request->get('opetype_id');
        $data['product_id'] = $request->get('product_id');
        $data['cantproduct'] = $request->get('cantproduct');
        $data['cash'] = $request->get('cash');
        $data['disc'] = $request->get('disc');
        $data['date'] = $request->get('date');
        $data['total'] = $request->get('total');

        Sell::find($id)->update($data);
        return redirect('h_ventas');
    }

    public function destroy($id)
    {
        
        Sell::where('idsell', $id)->update(['state' => 0]);
        return redirect('sell');
    }

      public function recovery($id)
    {
    
        Sell::where('idsell', $id)->update(['state' => 1]);
        return redirect('sell');
    }

      public function delete($id)
    {
    
        Sell::where('idsell', $id)->delete();
        return redirect('sell');
    }


}
