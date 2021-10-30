<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\Typeid;
use App\Models\Ptype;

class ClientesController extends Controller
{

    public function index()
    {
        $clientes = ['ptype_id'=>1, 'state'=>1];
        $clientes2 = ['ptype_id'=>1, 'state'=>0];
        //$data = Tipo::all(); Trae todos.
        $data = Clientes::where($clientes )->get();
        $data2 = Clientes::where($clientes2 )->get();
        return view('clientes.index', compact('data', 'data2') );
    }


    public function create()
    {
        $identificaciones = Typeid::where('state', 1)->get();
        $tipopersonas = Ptype::where('state', 1)->get();
        return view('clientes.new', compact('identificaciones', 'tipopersonas'));
    }


    public function store(Request $request)
    {
        $data['ptype_id'] = 1;
        $data['typeid_id'] = $request->get('typeid_id');
        $data['numid'] = $request->get('numid');
        $data['nomperson'] = $request->get('nomperson');
        $data['apeperson'] = $request->get('apeperson');
        $data['address'] = $request->get('address');
        $data['phone'] = $request->get('phone');
        $data['emailperson'] = $request->get('emailperson');
        $data['state'] = $request->get('state');
     
        Clientes::create($data);
        
        return redirect('clientes');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $identificaciones = Typeid::where('state', 1)->get();
        $tipopersonas = Ptype::where('state', 1)->get();
        $data = Clientes::find($id);
        return view('clientes.edit', compact('data', 'identificaciones', 'tipopersonas'));
    }

    public function update(Request $request, $id)
    {
        
        $data['ptype_id'] = 1;
        $data['typeid_id'] = $request->get('typeid_id');
        $data['numid'] = $request->get('numid');
        $data['nomperson'] = $request->get('nomperson');
        $data['apeperson'] = $request->get('apeperson');
        $data['address'] = $request->get('address');
        $data['phone'] = $request->get('phone');
        $data['emailperson'] = $request->get('emailperson');
        $data['state'] = $request->get('state');

        Clientes::find($id)->update($data);
        return redirect('clientes');
    }

    public function destroy($id)
    {
        
        Clientes::where('idperson', $id)->update(['state' => 0]);
        return redirect('clientes');
    }

      public function recovery($id)
    {   
        Clientes::where('idperson', $id)->update(['state' => 1]);
        return redirect('clientes');
    }

      public function delete($id)
    {
    
        Clientes::where('idperson', $id)->delete();
        return redirect('clientes');
    }


}
