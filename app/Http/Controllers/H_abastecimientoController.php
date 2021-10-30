<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sell;
use App\Models\Product;
use App\Models\Operationtype;


class H_abastecimientoController extends Controller
{

    public function index()
    {
        $consulta=['state' => 1, 'opetype_id' => 2];
        $consulta2=['state' => 0, 'opetype_id' => 2];
        $data=Sell::where($consulta)->get();
        //$data = Tipo::all(); Trae todos
        $data2 = Sell::where($consulta2)->get();
        return view('H_abastecimiento.index', compact('data', 'data2') );
    }

    public function abastecer()
    {
        $consultas=['quantity'<'stockmin', 'state' => 1];
        $data=Product::where('stockmin', '>', 'quantity')->get(); 

        $data2=Product::where('state', 0)->get();
        return view('H_abastecimiento.abastecer', compact('data', 'data2'));
    }

    public function create()
    {
        $operaciones = Operationtype::where('state', 1)->get();
        $productos = Product::where('state', 1)->get();
        return view('sell.new', compact('operaciones', 'productos'));
    }


    public function store(Request $request)
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
     

        Sell::create($data);
        
        return redirect('sell');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $operaciones = Operationtype::where('state', 1)->get();
        $productos = Product::where('state', 1)->get();
        $data = Sell::find($id);
        return view('sell.edit', compact('data', 'operaciones', 'productos'));
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
        return redirect('sell');
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
