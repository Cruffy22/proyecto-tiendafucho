<html>
    <head>
        <title>Tienda de Fucho- Agregar Accesorio</title>
    </head>
    <body>
        <header>
            <h1>Bienvenido a nuestra Tienda de Fucho</h1>
            <nav>
                <a href="index.php">Inicio</a>
                <a href="accesorios.php">Catálogo</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </header>
        <main>
            <section>
                <h2>Agregar Accesorio</h2>
                <form action="#" method="post">
                    <label for="nombre">Nombre del accesorio:</label>
                    <input type="text" name="nombre" id="nombre" required>

                    <br>

                    <label for="categoria">Categoría:</label>
                    <input type="text" name="categoria" id="categoria" required>
                    <br>

                    <label for="precio">Precio:</label>
                    <input type="number" name="precio" id="precio" step="0.01" min="0">
                    <br>
                    <label for="stock">Stock:</label>
                    <input type="number" name="stock" id="stock" min="0">
                    <br>
                    <label for="año">Año:</label>
                    <input type="number" name="año" id="año" min="0" require>
                    <br>
                    <button type="submit">Agregar accesorio</button>
                </form>
                
            </section>
        </main>
         <footer>
            <p>&copy; 2026 Tienda de fucho. Todos los derechos reservados.</p>
        </footer>
    </body>
</html>