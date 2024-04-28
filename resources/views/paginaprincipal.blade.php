<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>ONLINE SHOPPING</title>
</head>
<body>
    <header>
        <h1 id="main-title">ONLINE SHOPPING</h1>
        <nav>
            <ul>
                <li class="nav-item"><a class="nav-link" href="{{ route('producto') }}">Productos</a></li>
                <!-- Añade más enlaces según sea necesario -->
            </ul>
        </nav>
    </header>
    
    <main>
        <section class="bienvenida">
            <h2>Bienvenidos a Nuestra Tienda en Línea</h2>
            <p>Encuentra las últimas ofertas en tecnología aquí.</p>
        </section>
        
        <section class="promociones">
            <!-- Banners de promociones aquí -->
        </section>
        
        <section class="productos-destacados">
            <!-- Productos destacados aquí -->
        </section>
    </main>
    
    <footer>
        <p>Contacto: contacto@onlineshopping.com</p>
        <!-- Más información de pie de página aquí -->
    </footer>
    
    <!-- Aquí puedes incluir JavaScript si es necesario -->
</body>
</html>
