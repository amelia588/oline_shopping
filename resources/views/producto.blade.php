<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS, puedes cambiar la versión si necesitas otra -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
    <title>Productos</title>
</head>
<body>

    <div class="container text-center my-5">
        <h1 class="mb-4">Productos</h1>
        <div class="row">
            @foreach ($productos as $producto)
                <div class="col-md-4 mb-3">
                    <div class="card h-100 shadow">
                    <img src="data:image/jpeg;base64,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" class="card-img-top rounded" alt="Imagen de {{ $producto->nombre }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $producto->nombre }}</h5>
                            <p class="card-text">${{ number_format($producto->precio, 2) }}</p>
                            <button type="button" class="btn btn-primary add-to-cart-btn" data-producto-id="{{ $producto->id }}">Añadir al carrito</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- JavaScript & jQuery libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JavaScript -->
    <script>
        $(document).ready(function() {
            $('.add-to-cart-btn').click(function() {
                const productoId = $(this).data('producto-id');
                console.log('Producto añadido al carrito:', productoId);
                // Aquí puedes agregar código adicional para manejar la adición al carrito
            });
        });
    </script>

</body>
</html>
