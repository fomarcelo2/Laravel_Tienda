<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    //
    function mostrar($usuario = null){
        if($usuario == null){
            return 'Debe ingresar un nombre de usuario';
        }
        //return 'Nombre usuario = '.$usuario;
        return phpinfo();
    }
}
