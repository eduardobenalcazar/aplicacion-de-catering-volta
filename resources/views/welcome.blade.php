<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menús</title>
    <style>
        /* Estilo global */
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #121212; /* Fondo oscuro */
            color: #f0f0f0; /* Texto claro */

        }

        h1 {
            text-align: center;
            margin: 40px 0;
            font-size: 2.8em;
            color: #f8f8f8;
        }

        /* Contenedor principal */
        .menu-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            padding: 10px;
        }

        /* Estilo de los ítems del menú */
        .menu-item {
            background-color: #1e1e1e; /* Gris oscuro */
            border: 1px solid #333; /* Borde más oscuro */
            border-radius: 15px;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
            padding: 10px;
            width: calc(33.333% - 30px);
            box-sizing: border-box;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        }

        .menu-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
            background-color: #292929; /* Gris más claro al hacer hover */
        }

        .menu-item img {
            max-width: 100%;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .menu-item:hover img {
            transform: scale(1.05);
        }

        .menu-item h3 {
            margin: 20px 0 10px;
            font-size: 1.8em;
            color: #f8f8f8;
        }

        .menu-item p {
            margin: 10px 0;
            color: #ccc; /* Gris claro para descripciones */
        }

        .menu-item strong {
            font-size: 1.4em;
            color: #ffffff; /* Blanco */
        }

        /* Animaciones */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .menu-item {
            animation: fadeIn 0.5s ease;
        }

        /* Responsividad */
        @media (max-width: 768px) {
            .menu-item {
                width: calc(50% - 30px);
            }
        }

        @media (max-width: 480px) {
            .menu-item {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <h1>Menús Disponibles</h1>
    <div class="menu-container">
        @foreach($menus as $menu)
            <div class="menu-item">
                @if($menu->imagen)
                    <img src="{{ asset('storage/' . $menu->imagen) }}" alt="{{ $menu->nombre }}">
                @else
                    <img src="https://via.placeholder.com/150" alt="Sin imagen">
                @endif
                <h3>{{ $menu->nombre }}</h3>
                <p>{{ $menu->descripcion }}</p>
                <p><strong>Precio: ${{ number_format($menu->precio, 2) }}</strong></p>
            </div>
        @endforeach
    </div>
</body>
</html>
