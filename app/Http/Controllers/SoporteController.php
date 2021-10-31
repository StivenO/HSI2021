<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SoporteController extends Controller
{

  public function index()
  {

  }
  public function bd()
  {
    return view('soporte.bd');

  }
  public function contacto()
  {
    return view('soporte.contacto');
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
