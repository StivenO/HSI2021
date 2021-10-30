<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Sell;

class InicioController extends Controller
{

  public function index()
  {

    //SELECT COUNT(*) AS 'sumproduct' FROM product WHERE quantity > '0'  and `state`= 1
    $a=Product::where('state', '=', 1)
                ->where('quantity','>','0')
                ->get();
    $inventario = $a->count();
    //SELECT SUM(total) AS 'sumventas' FROM sell WHERE opetype_id ='1';
    $b=Sell::where('opetype_id', '=','1')
            ->where('state', '=', 1)
            ->get();
    $ventas= $b->sum('total');
    //SELECT COUNT(*) AS 'numclien' FROM person WHERE ptype_id ='1' and `state` =1
    $c=Person::where('state', '=', 1)
                ->where('ptype_id', '=','1')
                ->get();
    $nclientes= $c->count();
    //SELECT COUNT(*) AS 'numprove' FROM person WHERE ptype_id ='2' and `state`=1;
    $d=Person::where('state', '=', 1)
              ->where('ptype_id', '=','2')
              ->get();
    $nproveedores=$d->count();;

    return view('inicio.index', compact("inventario", "ventas", "nclientes", "nproveedores"));
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
