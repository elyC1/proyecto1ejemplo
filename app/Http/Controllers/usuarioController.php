<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class usuarioController extends Controller
{
    function insertar(Request $req){
        $usuario = new Usuario();

        $usuario->username=$req->username;
        $usuario->pass=$req->pass;
        $usuario->estatus=1;

        $usuario->save();
        return redirect()->route("usuario.mostrar");
    }

    function mostrar(){
        $datos = Usuario::all();
        return view("lista_usuarios", compact("datos"));
    }
    function editar(Usuario $id){
        return view("editar_usuario", compact("id"));
    }
    function actualizar(Usuario $id, Request $req){
        $id->username=$req->username;
        $id->pass=$req->pass;
        $id->estatus=1;

        $id->save();
        return redirect()->route("usuario.mostrar");
    }
    function eliminar(Usuario $id){
        $id->delete();
        return redirect()->route("usuario.mostrar");
    }

    function baja(Usuario $id){
        $id->estatus=0;

        $id->save();
        return redirect()->route("usuario.mostrar");
    }
}
