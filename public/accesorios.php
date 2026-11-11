<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/datos/RepositorioProductos.php';
require_once __DIR__ . '/../src/utilidades/vistas.php';

$repositorio = new RepositorioProductos(__DIR__ . '/../datos/datos.json');
$productos = $repositorio->obtenerTodos();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tienda de Fucho - Accesorios</title>
        <link rel="stylesheet" href="assets/css/estilos.css">
    </head>
    <body>
        <header>
            <h1>Productos</h1>
            <nav aria-label="Principal">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="accesorios.php" aria-current="page">Catálogo</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </nav>
        </header>
        
        <main>
            <h2>Catálogo<h2>
            <a href="agregar-accesorio.php" class="boton-agregar">Agregar accesorio +</a>
            <section class="tarjetas-productos">
                <?php foreach ($productos as $producto): ?>
                    <?php mostrarTarjetaProducto($producto); ?>
                <?php endforeach; ?>
            </section>
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