<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function formulario($tipo_persona = null)
    {
        return view('formulario_contacto', compact('tipo_persona'));
    }

    public function newContact(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:3|max:255',
            'correo' => 'required|email',
            'mensaje' => ['required', 'min:10']
        ]);

        $contacto = new Contacto(); #control-espacio
        $contacto->nombre = $request->nombre;
        $contacto->correo = $request->correo;
        $contacto->mensaje = $request->mensaje;
        $contacto->save();

        return redirect('/lista');
    }

    public function lista()
    {
        $mensajes = Contacto::all();
        return view('lista', compact('mensajes'));
    }
}
