<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Typeid;
use App\Models\Ptype;

class PersonController extends Controller
{

    public function index()
    {
        //$data = Tipo::all(); Trae todos.
        $data = Person::where('state', 1)->get();
        $data2 = Person::where('state', 0)->get();
        return view('person.index', compact('data', 'data2') );
    }


    public function create()
    {
        $identificaciones = Typeid::where('state', 1)->get();
        $tipopersonas = Ptype::where('state', 1)->get();
        return view('person.new', compact('identificaciones', 'tipopersonas'));
    }


    public function store(Request $request)
    {
        $data['ptype_id'] = $request->get('ptype_id');
        $data['typeid_id'] = $request->get('typeid_id');
        $data['numid'] = $request->get('numid');
        $data['nomperson'] = $request->get('nomperson');
        $data['apeperson'] = $request->get('apeperson');
        $data['address'] = $request->get('address');
        $data['phone'] = $request->get('phone');
        $data['emailperson'] = $request->get('emailperson');
        $data['state'] = $request->get('state');
     
        Person::create($data);
        
        return redirect('person');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $identificaciones = Typeid::where('state', 1)->get();
        $tipopersonas = Ptype::where('state', 1)->get();
        $data = Person::find($id);
        return view('person.edit', compact('data', 'identificaciones', 'tipopersonas'));
    }

    public function update(Request $request, $id)
    {
        
        $data['ptype_id'] = $request->get('ptype_id');
        $data['typeid_id'] = $request->get('typeid_id');
        $data['numid'] = $request->get('numid');
        $data['nomperson'] = $request->get('nomperson');
        $data['apeperson'] = $request->get('apeperson');
        $data['address'] = $request->get('address');
        $data['phone'] = $request->get('phone');
        $data['emailperson'] = $request->get('emailperson');
        $data['state'] = $request->get('state');

        Person::find($id)->update($data);
        return redirect('person');
    }

    public function destroy($id)
    {
        
        Person::where('idperson', $id)->update(['state' => 0]);
        return redirect('person');
    }

      public function recovery($id)
    {   
        Person::where('idperson', $id)->update(['state' => 1]);
        return redirect('person');
    }

      public function delete($id)
    {
    
        Person::where('idperson', $id)->delete();
        return redirect('person');
    }


}
