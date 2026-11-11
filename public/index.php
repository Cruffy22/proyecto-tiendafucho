<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/datos/RepositorioProductos.php';
require_once __DIR__ . '/../src/utilidades/vistas.php';

$repositorio = new RepositorioProductos(__DIR__ . '/../datos/datos.json');
$destacados = array_slice($repositorio->obtenerTodos(), 0, 3);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tienda de Fucho</title>
    </head>
    <body>
        <header>
            <h1>Bienvenido a nuestra Tienda de Fucho</h1>
            <link rel="stylesheet" href="assets/css/estilos.css">
            <nav aria-label="Principal">
                <ul>
                    <li><a href="index.php" aria-current="page">Inicio</a></li>
                    <li><a href="accesorios.php">Catálogo</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <section>
                <h2>Productos Destacados</h2>
                <p>Encuentra la mejor ropa y accesorios  en Tienda de Fucho.</p>
            </section>
        </main>
        <footer>
            <p>&copy; 2026 Tienda de fucho. Todos los derechos reservados.</p>
        </footer>
    </body>
</html>