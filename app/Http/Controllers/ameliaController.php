<?php

namespace App\Http\Controllers;
use App\Models\Producto;

use App\Http\Controllers\Controller;


class ameliaController extends Controller
{
    public function paginaprincipal()
    {
        // Código para ejecutar cuando se accede a la página principal
        return view('paginaprincipal');
    }
    /**
     * Mostrar la lista de productos.
     *
     * @return \Illuminate\Http\Response
     */
    public function producto()
    {
        // Si vas a obtener datos de una base de datos, podrías hacer algo así:
        $productos = Producto::all(); // Obtiene todos los productos de la base de datos

        // Retorna la vista con los productos. Asume que hay una vista 'producto.blade.php'
        // en la carpeta resources/views con la lista de productos.
        return view('producto', compact('productos'));
    }
    
    
}
