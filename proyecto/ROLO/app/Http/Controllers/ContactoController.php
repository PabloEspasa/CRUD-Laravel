<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contactos');
    }

    public function procesarFormulario(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'sugerencias' => 'required|string',
        ]);

        // Aquí puedes guardar los datos en la base de datos o realizar otras acciones

        return redirect()->route('contactos')->with('success', 'Formulario enviado exitosamente');
    }
}
