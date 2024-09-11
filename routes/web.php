<?php

use App\Models\Contacto; #Linea 29 usando Ctrl-Espacio para crear esto
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto', function () {
    return view('formulario_contacto');
});

Route::post('/contacto-exito', function (Request $request) {
    //return 'Formulario recibido';
    //dd($request->all(), $request->nombre);
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

    return redirect('/contacto');
});

Route::get({
    
})