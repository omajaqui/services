<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function ValidarIngreso(Request $request)
    {   
        $usuario = $request->usuario;
        $pass    = $request->pass;
        $mdpass  = MD5($pass);

        $continuar = '';
        $mensaje   = '';

        /* CONSULTAR SI EL USUARIO INGRESADO EXISTE */
        $validarUsuario = DB::select("CALL spValidarLogin('validarUsuarioExiste',?,'')",[$usuario]);

        //entra en condicion cuando el usuario existe
        if (array_key_exists(0,$validarUsuario)) {
            //validar contraseña de usuario
            if ($mdpass == $validarUsuario[0]->pass) {
                $continuar = 'S';
                $mensaje = 'Validación satisfactoria';
            }else{
                $continuar = 'N';
                $mensaje = 'Usuario o Contraseña invalidas';
            }
        }else{
            $continuar = 'N';
            $mensaje   = 'Usuario o Contraseña invalidas';
        }

        $respuesta = [
            'Continuar' => $continuar,
            'Mensaje'   => $mensaje
        ];

        return response()->json(compact('respuesta'));

    }

    public function test(){
        return "return de la function test del LoginController";
    }
}
