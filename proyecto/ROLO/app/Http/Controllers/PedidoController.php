<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function finalizarCompra(Request $request)
    {
        $user = auth()->user(); // Obtener el usuario autenticado actualmente
        $cartItems = $request->input('cartItems'); // Suponiendo que tienes los productos en esta variable

        // Insertar cada producto del carrito en la tabla "pedido" asociándolo al usuario actual.
        foreach ($cartItems as $cartItem) {
            Pedido::create([
                'producto' => $cartItem['nombre'],
                'precio' => $cartItem['precio'],
                'id_user' => $user->id,
            ]);
        }

        // Aquí puedes agregar cualquier otra lógica relacionada con la finalización de la compra.

        return response()->json(['message' => 'Compra finalizada con éxito'], 200);
    }
}
