<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{

    public function index()
    {
        $data=Rol::where('state', 1)->get();
        // ->with('products'), agregar a $data si quiere mostrar los productos.
        $data2=Rol::where('state', 0)->get();
        return view('rol.index', compact('data', 'data2'));

    }

    public function create()
    {
        return view('rol.new');
    }

    public function store(Request $request)
    {
        $data['nomrol'] = $request->get('nomrol');

        Rol::create($data);
        return redirect('rol');
    }

    public function show($id)
    {
        // $data = Product::find($id); No Hay Necesidad *DE MOMENTO*
        // return view('product.show', compact('data')); No Hay Necesidad *DE MOMENTO*
    }

    public function edit($id)
    {
        $data = Rol::find($id);
        return view('rol.edit', compact('data'));
    }


    public function update(Request $request, $id)
    {
        $data['nomrol'] = $request->get('nomrol');

        Rol::find($id)->update($data);
        return redirect('rol');
    }

    public function destroy($id)
    {
        Rol::find($id)->update(['state' =>0]);
        return redirect('rol');
    }

    public function recovery($id)
    {
        Rol::find($id)->update(['state' =>1]);
        return redirect('rol');
    }
    public function delete($id)
    {
        Rol::find($id)->delete();
        return redirect('rol');
    }
}
