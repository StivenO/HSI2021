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
    $b1= $b->sum('total');
    $ventas=number_format($b1);
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
    //SELECT COUNT(*) AS 'nummin' FROM product pd INNER JOIN unit ut ON pd.unit_id = ut.idunit INNER JOIN category ct ON pd.category_id = ct.idcategory WHERE quantity < stockmin AND pd.state = 0
    $e=Product::where('state', '=', 1)
                ->whereRaw('stockmin >=quantity')
                ->get();
    $alerta=$e->count();;

    return view('inicio.index', compact("inventario", "ventas", "nclientes", "nproveedores", "alerta"));
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
