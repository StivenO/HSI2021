<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ptype;

class PtypeController extends Controller
{

    public function index()
    {
        $data=Ptype::where('state', 1)->get();
        // ->with('products'), agregar a $data si quiere mostrar los productos.
        $data2=Ptype::where('state', 0)->get();
        return view('ptype.index', compact('data', 'data2'));

    }

    public function create()
    {
        return view('ptype.new');
    }

    public function store(Request $request)
    {
        $data['nomptype'] = $request->get('nomptype');

        Ptype::create($data);
        return redirect('ptype');
    }

    public function show($id)
    {
        // $data = Product::find($id); No Hay Necesidad *DE MOMENTO*
        // return view('product.show', compact('data')); No Hay Necesidad *DE MOMENTO*
    }

    public function edit($id)
    {
        $data = Ptype::find($id);
        return view('ptype.edit', compact('data'));
    }


    public function update(Request $request, $id)
    {
        $data['nomptype'] = $request->get('nomptype');

        Ptype::find($id)->update($data);
        return redirect('ptype');
    }

    public function destroy($id)
    {
        Ptype::find($id)->update(['state' =>0]);
        return redirect('ptype');
    }

    public function recovery($id)
    {
        Ptype::find($id)->update(['state' =>1]);
        return redirect('ptype');
    }
    public function delete($id)
    {
        Ptype::find($id)->delete();
        return redirect('ptype');
    }
}
