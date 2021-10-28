<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Typeid;

class TypeidController extends Controller
{

    public function index()
    {
        $data=Typeid::where('state', 1)->get();
        // ->with('products'), agregar a $data si quiere mostrar los productos.
        $data2=Typeid::where('state', 0)->get();
        return view('typeid.index', compact('data', 'data2'));

    }

    public function create()
    {
        return view('typeid.new');
    }

    public function store(Request $request)
    {
        $data['nomtypeid'] = $request->get('nomtypeid');

        Typeid::create($data);
        return redirect('typeid');
    }

    public function show($id)
    {
        // $data = Product::find($id); No Hay Necesidad *DE MOMENTO*
        // return view('product.show', compact('data')); No Hay Necesidad *DE MOMENTO*
    }

    public function edit($id)
    {
        $data = Typeid::find($id);
        return view('typeid.edit', compact('data'));
    }


    public function update(Request $request, $id)
    {
        $data['nomtypeid'] = $request->get('nomtypeid');

        Typeid::find($id)->update($data);
        return redirect('typeid');
    }

    public function destroy($id)
    {
        Typeid::find($id)->update(['state' =>0]);
        return redirect('typeid');
    }

    public function recovery($id)
    {
        Typeid::find($id)->update(['state' =>1]);
        return redirect('typeid');
    }
    public function delete($id)
    {
        Typeid::find($id)->delete();
        return redirect('typeid');
    }
}
