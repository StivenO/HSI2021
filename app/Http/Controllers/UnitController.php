<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Unit::where('state', 1)->get();
        // ->with('products'), agregar a $data si quiere mostrar los productos.
        $data2=Unit::where('state', 0)->get();
        return view('unit.index', compact('data', 'data2'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unit.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['nomunit'] = $request->get('nomunit');

        Unit::create($data);
        return redirect('unit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data = Product::find($id); No Hay Necesidad *DE MOMENTO*
        // return view('product.show', compact('data')); No Hay Necesidad *DE MOMENTO*
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Unit::find($id);
        return view('unit.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data['nomunit'] = $request->get('nomunit');


        Unit::find($id)->update($data);
        return redirect('unit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Unit::find($id)->update(['state' =>0]);
        return redirect('unit');
    }

    public function recovery($id)
    {
        Unit::find($id)->update(['state' =>1]);
        return redirect('unit');
    }
    public function delete($id)
    {
        Unit::find($id)->delete();
        return redirect('unit');
    }
}
