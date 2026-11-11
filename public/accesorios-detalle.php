<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/datos/RepositorioProductos.php';
require_once __DIR__ . '/../src/utilidades/vistas.php';

$repositorio = new RepositorioProductos(__DIR__ . '/../datos/datos.json');
$idSolicitado = (int) filter_var($_GET['id'] ?? '', FILTER_VALIDATE_INT);

$productoEncontrado = true;
try {
    $producto = $repositorio->buscarPorId($idSolicitado);
} catch (OutOfBoundsException $error) {
    $productoEncontrado = false;
    http_response_code(404);
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tienda de Fucho - Detalle Accesorio</title>
        <link rel="stylesheet" href="assets/css/estilos.css">
    </head>
    <body>
        <header>
            <h1>Bienvenido a nuestra Tienda de Fucho</h1>
            <nav aria-label="Principal">
                <ul>
                    <a href="index.php">Inicio</a>
                    <a href="accesorios.php" aria-current="page">Catálogo</a>
                    <a href="contacto.php">Contacto</a>
                </ul>
            </nav>
        </header>
        
        <main>
            <nav class="migas" arias-label="Ruta de navegación">
                <ol>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="productos.php">Catálogo</a></li>
                    <li aria-current="page"><?= $productoEncontrado ? escapar($producto->obtenerNombre()) : 'Producto no encontrado' ?></li>
                </ol>
            </nav>
            <?php if ($productoEncontrado): ?>
                <article>
                    <img src="<?= escapar($producto->obtenerImagen()) ?>" alt="Foto de <?= escapar($producto->obtenerNombre()) ?>">
                    <div class="tarjeta-producto-info">
                        <h2><?= escapar($producto->obtenerNombre()) ?></h2>
                        <p class="etiqueta-categoria">Categoría: <?= escapar($producto->obtenerCategoria()->obtenernombre()) ?></p>
                        <p><?= escapar($producto->obtenerDescripcion()) ?></p>
                        <p class="tarjeta-producto-precio">Precio: <?= $producto->obtenerPrecioFormateado() ?></p>
                        <?php mostrarDisponibilidad($producto); ?>
                        <a class="enlace-detalle" href="accesorios.php">Volver al catálogo</a>
                    </div>
                </article>
            <?php else: ?>
                <h2>Producto no encontrado</h2>
                <p>El producto que buscas no existe o ya no está disponible.</p>
                <a class="enlace-detalle" href="accesorios.php">Volver al catálogo</a>
            <?php endif; ?>
        </main>
        <footer>
            <p>&copy; 2026 Tienda de fucho. Todos los derechos reservados.</p>
        </footer>
    </body>
</html>