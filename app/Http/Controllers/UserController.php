<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Typeid;
use Hash;


class UserController extends Controller
{

    public function index()
    {
        //$data = Tipo::all(); Trae todos.
        $data = User::where('state', 1)->get();
        $data2 = User::where('state', 0)->get();
        return view('user.index', compact('data', 'data2'));
    }


    public function create()
    {
        $identificaciones = Typeid::where('state', 1)->get();
        return view('user.new', compact('identificaciones'));
    }


    public function store(Request $request)
    {
        $data['typeid_id'] = $request->get('typeid_id');
        $data['numid'] = $request->get('numid');
        $data['image'] = $request->get('image');
        $data['nomuser'] = $request->get('nomuser');
        $data['apeuser'] = $request->get('apeuser');
        $data['email'] = $request->get('email');
        $data['nick'] = $request->get('nick');
        $data['password'] = Hash::make($request->get('password'));
        $data['rol_id'] = $request->get('rol_id');
        $data['state'] = $request->get('state');

        User::create($data);
        return redirect('user');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $identificaciones = Typeid::where('state', 1)->get();
        $data = User::find($id);
        return view('user.edit', compact('data', 'identificaciones'));
    }

    public function update(Request $request, $id)
    {

        $data['typeid_id'] = $request->get('typeid_id');
        $data['numid'] = $request->get('numid');
        $data['image'] = $request->get('image');
        $data['nomuser'] = $request->get('nomuser');
        $data['apeuser'] = $request->get('apeuser');
        $data['email'] = $request->get('email');
        $data['nick'] = $request->get('nick');
        $data['password'] = $request->get('password');
        $data['rol_id'] = $request->get('rol_id');
        $data['state'] = $request->get('state');

        User::find($id)->update($data);
        return redirect('user');
    }

    public function destroy($id)
    {

        User::where('iduser', $id)->update(['state' => 0]);
        return redirect('user');
    }

    public function recovery($id)
    {

        User::where('iduser', $id)->update(['state' => 1]);
        return redirect('user');
    }

    public function delete($id)
    {

        User::where('iduser', $id)->delete();
        return redirect('user');
    }
}
