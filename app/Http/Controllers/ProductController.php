<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Unit;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Product::where('state', 1)->with('category')->get();
        // echo "<pre>";
        // print_r ($data->toArray());
        // echo "</pre>";
        $data2=Product::where('state', 0)->get();
        return view('product.index', compact('data', 'data2'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos = Category::where('state', 1)->get();
        $datosu = Unit::where('state', 1)->get();
        return view('product.new', compact('datos', 'datosu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['nomproduct'] = $request->get('nomproduct');
        $data['description'] = $request->get('description');
        $data['stockmin'] = $request->get('stockmin');
        $data['pricein'] = $request->get('pricein');
        $data['quantity'] = $request->get('quantity');
        $data['priceout'] = $request->get('priceout');
        $data['unit_id'] = $request->get('unit_id');
        $data['category_id'] = $request->get('category_id');

        Product::create($data);
        return redirect('product');
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
        $categorias = Category::where('state', 1)->get();
        $unidades = Unit::where('state', 1)->get();
        $data = Product::find($id);
        return view('product.edit', compact('data', 'categorias', 'unidades'));
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
        $data['nomproduct'] = $request->get('nomproduct');
        $data['description'] = $request->get('description');
        $data['stockmin'] = $request->get('stockmin');
        $data['pricein'] = $request->get('pricein');
        $data['quantity'] = $request->get('quantity');
        $data['priceout'] = $request->get('priceout');
        $data['unit_id'] = $request->get('unit_id');
        $data['category_id'] = $request->get('category_id');

        Product::find($id)->update($data);
        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        product::find($id)->update(['state' =>0]);
        return redirect('product');
    }

    public function recovery($id)
    {
        product::find($id)->update(['state' =>1]);
        return redirect('product');
    }
    public function delete($id)
    {
        product::find($id)->delete();
        return redirect('product');
    }
}
