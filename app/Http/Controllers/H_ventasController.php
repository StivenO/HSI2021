<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sell;
use App\Models\Product;
use App\Models\Operationtype;
use App\Models\Person;
use Auth;

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
        $personas = Person::where('state', 1)
                            ->where('ptype_id', 1)
                            ->get();
        $operaciones = Operationtype::where('state', 1)->get();
        $productos = Product::where('state', 1)->get();
        return view('h_ventas.new', compact('operaciones', 'productos', 'personas'));
    }


    public function store(Request $request)
    {        
        
        $data['user_id'] = (Auth::user()->iduser);
        $data['person_id'] = $request->get('person_id');
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
        // SELECT SUM(total) AS 'sumventas' FROM sell WHERE opetype_id ='1'
        $b=Sell::where('opetype_id', '=','1')
                ->where('state', '=', 1)
                ->get();
        $b1= $b->sum('total');
        $activos=number_format($b1);

        //SELECT SUM(total) AS 'sumcompras' FROM sell WHERE opetype_id ='2'
        $a=Sell::where('opetype_id', '=','2')
        ->where('state', '=', 1)
        ->get();
        $a1= $a->sum('total');
        $pasivos=number_format($a1);

        //$suma = $sumv - $sumc;
        $total=number_format($b1-$a1);
        return view('h_ventas.caja', compact("activos", "pasivos", "total"));
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
