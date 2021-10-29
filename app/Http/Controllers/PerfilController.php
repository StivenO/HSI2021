<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Typeid;

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

  public function update(Request $request, $id)
  {
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
