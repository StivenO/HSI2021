<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operationtype;

class OperationtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Operationtype::where('state', 1)->get();
        // ->with('products'), agregar a $data si quiere mostrar los productos.
        $data2=Operationtype::where('state', 0)->get();
        return view('operationtype.index', compact('data', 'data2'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operationtype.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['nomopetype'] = $request->get('nomopetype');

        Operationtype::create($data);
        return redirect('operationtype');
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
        $data = Operationtype::find($id);
        return view('operationtype.edit', compact('data'));
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
        $data['nomopetype'] = $request->get('nomopetype');


        Operationtype::find($id)->update($data);
        return redirect('operationtype');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Operationtype::find($id)->update(['state' =>0]);
        return redirect('operationtype');
    }

    public function recovery($id)
    {
        Operationtype::find($id)->update(['state' =>1]);
        return redirect('operationtype');
    }
    public function delete($id)
    {
        Operationtype::find($id)->delete();
        return redirect('operationtype');
    }
}
