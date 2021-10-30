<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Proveedores;
use App\Models\Typeid;
use App\Models\Ptype;

class ProveedoresController extends Controller
{

    public function index()
    {
        $proveedores = ['ptype_id'=>2, 'state'=>1];
        $proveedores2 = ['ptype_id'=>2, 'state'=>0];
        //$data = Tipo::all(); Trae todos.
        $data = Proveedores::where($proveedores)->get();
        $data2 = Proveedores::where($proveedores2)->get();
        return view('proveedores.index', compact('data', 'data2') );
    }


    public function create()
    {
        $identificaciones = Typeid::where('state', 1)->get();
        $tipopersonas = Ptype::where('state', 1)->get();
        return view('proveedores.new', compact('identificaciones', 'tipopersonas'));
    }


    public function store(Request $request)
    {
        $data['ptype_id'] = 2;
        $data['typeid_id'] = $request->get('typeid_id');
        $data['numid'] = $request->get('numid');
        $data['nomperson'] = $request->get('nomperson');
        $data['apeperson'] = $request->get('apeperson');
        $data['address'] = $request->get('address');
        $data['phone'] = $request->get('phone');
        $data['emailperson'] = $request->get('emailperson');
        $data['state'] = $request->get('state');
     
        Proveedores::create($data);
        
        return redirect('proveedores');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $identificaciones = Typeid::where('state', 1)->get();
        $tipopersonas = Ptype::where('state', 1)->get();
        $data = Proveedores::find($id);
        return view('proveedores.edit', compact('data', 'identificaciones', 'tipopersonas'));
    }

    public function update(Request $request, $id)
    {
        
        $data['ptype_id'] = 2;
        $data['typeid_id'] = $request->get('typeid_id');
        $data['numid'] = $request->get('numid');
        $data['nomperson'] = $request->get('nomperson');
        $data['apeperson'] = $request->get('apeperson');
        $data['address'] = $request->get('address');
        $data['phone'] = $request->get('phone');
        $data['emailperson'] = $request->get('emailperson');
        $data['state'] = $request->get('state');

        Person::find($id)->update($data);
        return redirect('proveedores');
    }

    public function destroy($id)
    {
        
        Proveedores::where('idperson', $id)->update(['state' => 0]);
        return redirect('proveedores');
    }

      public function recovery($id)
    {   
        Proveedores::where('idperson', $id)->update(['state' => 1]);
        return redirect('proveedores');
    }

      public function delete($id)
    {
    
        Proveedores::where('idperson', $id)->delete();
        return redirect('proveedores');
    }


}
