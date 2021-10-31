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

        $datos['nick']    = $request->get('nick');
        $datos['password'] = $request->get('password');

       

        if (Auth::attempt($datos)) {
            $request->session()->regenerate();
        //echo "<pre>";
        //print_r($datos);
        //echo "</pre>";
        //die;
            return redirect('inicio');
        }

        return redirect('login')->with('mensaje', 'Usuario o contraseña incorrecta!')
        ->with('tipo', 'danger')
        ->with('icono', '<i class="fas fa-times-circle"></i>');
    }


    public function store(Request $request)
    {

        //$data['nick']   = $request->get('nick');
        $data['email']    = $request->get('email');
        $data['password'] = Hash::make($request->get('password'));

        User::create($data);

        return redirect('login')->with('mensaje2', 'Cuenta creada exitosamente!')
            ->with('tipo2', 'success')
            ->with('icono2', '<i class="fas fa-check-circle"></i>');
    }
}
