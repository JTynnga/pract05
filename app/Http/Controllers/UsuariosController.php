<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function create(Request $request)
    {
        $nuevoUsuario = new Usuarios();
        $nuevoUsuario->create($request->all());
        return redirect('/usuarios');
    }

    public function show(Request $request)
    {
        $usuarios = Usuarios::all();
        return view('lista', compact(array('usuarios')));
    }
}
