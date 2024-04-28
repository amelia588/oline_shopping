<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function producto()
{
    $productos = [
        [
            'nombre' => 'Laptop Notebook',
            'imagen' => 'laptop.jpg',
            'precio' => 999.99
        ],
        [
            'nombre' => 'Laptop Ultrabook',
            'imagen' => 'ruta/a/imagen-ultrabook.jpg',
            'precio' => 1299.99
        ],
        [
            'nombre' => 'Laptop Gamer',
            'imagen' => 'ruta/a/imagen-gamer.jpg',
            'precio' => 1499.99
        ],
        [
            'nombre' => 'Laptop 2 en 1',
            'imagen' => 'ruta/a/imagen-2en1.jpg',
            'precio' => 1099.99
        ],
        [
            'nombre' => 'Laptop Chromebook',
            'imagen' => 'ruta/a/imagen-chromebook.jpg',
            'precio' => 899.99
        ],
        // ... otros productos
    ];

    // Retorna la vista con los productos.
    return view('producto', compact('productos'));
}

}
