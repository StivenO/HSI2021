<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Typeid;
use Auth;
use Hash;


class PerfilController extends Controller
{

  public function index()
  {
    $identificaciones = Typeid::where('state', 1)->get();
    $data = ("{{Auth::user()->typeid->nomtypeid}}");
    return view('perfil.index', compact('data', 'identificaciones'));
  }


  public function create()
  {
  }


  public function store(Request $request)
  {
  }

  public function show($id)
  {
    //
  }


  public function edit($id)
  {

  }

  public function update(Request $request)
  {
        $id=(Auth::user()->iduser);
        $data['typeid_id'] = $request->get('typeid_id');
        $data['numid'] = $request->get('numid');
        $data['nomuser'] = $request->get('nomuser');
        $data['apeuser'] = $request->get('apeuser');
        $data['email'] = $request->get('email');
        $data['nick'] = $request->get('nick');
        $data['pas'] = $request->get('password');
        $data['pas2'] = $request->get('password2');
    // 
        if ($data['pas'] == ("")){
          $data['password'] = (Auth::user()->password);
        }elseif ($data['pas'] != $data['pas2']) {
          return redirect('perfil')->with('alerta', 'La contraseña de verificación no coincide.')
            ->with('tipo2', 'danger');
        } else {
          $data['password'] = Hash::make($request->get('password'));
        }
        $data['rol_id'] = $request->get('rol_id');
        $data['state'] = $request->get('state');
        User::find($id)->update($data);
        return redirect('inicio');
  }

  public function destroy($id)
  {
  }

  public function recovery($id)
  {
  }

  public function delete($id)
  {
  }
}
