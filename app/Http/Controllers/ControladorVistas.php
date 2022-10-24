<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidarFormulario;
use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    public function vistaTabla (){
        return view('Tabla');
    }

    public function vistaFormulario (){
        return view('Formulario');
    }

    public function datosformulario (ValidarFormulario $requeri){
        return redirect('Formulario')->with('confirmacion','Tus datos han sido guardados');
    }
}
