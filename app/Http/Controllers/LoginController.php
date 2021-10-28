<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use File;
use Hash;
use Auth;

use App\Models\User;

class LoginController extends Controller
{

    public function index()
    {
        return view('login');
    }


    public function create()
    {
        return view('register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }


    public function check(Request $request)
    {

        $datos['email']    = $request->get('email');
        $datos['password'] = $request->get('password');

       

        if (Auth::attempt($datos)) {
            $request->session()->regenerate();
        //echo "<pre>";
        //print_r($datos);
        //echo "</pre>";
        //die;
            return redirect('inicio');
        }

        return back();
    }


    public function store(Request $request)
    {

        //$data['nick']   = $request->get('nick');
        $data['email']    = $request->get('email');
        $data['password'] = Hash::make($request->get('password'));

        User::create($data);

        return redirect('login')->with('mensaje', 'Cuenta creada exitosamente!')
            ->with('tipo', 'success')
            ->with('icono', '<i class="fas fa-check-circle"></i>');
    }
}
