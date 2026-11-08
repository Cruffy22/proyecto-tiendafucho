<?php
declare(strict_types=1);

require_once __DIR__.'/../src/modelos/Categoria.php';
require_once __DIR__.'/../src/modelos/Producto.php';


$playeras =new Categoria('Playeras');
$balones =new Categoria ('Balones');
$tenis=new Categoria ('Tenis');

echo $playeras->obtenernombre(). '<br>';
echo $balones->obtenernombre(). '<br>';
echo $tenis->obtenernombre().'<br>---------------<br>';

#$intento = new Producto(1, 'Playera del América', new Categoria ('Playeras'), 1299.99, 'Texto', 200, 'img.png');
$playeramerica = Producto::desdeArreglo([
    'id'=> 1,
    'nombre'=> 'Playera de futbol Club América',
    'categoria'=> 'Playeras',
    'precio'=> 1299.99,
    'descripcion'=> 'Playera de Club América temporada 2023 local' ,
    'stock'=> 0,
    'imagen'=> 'https://placehold.co/200x150?text=Mouse'
]);

echo $playeramerica->obtenerNombre(). '('.$playeramerica->obtenerCategoria()->obtenerNombre().') y cuesta '.$playeramerica->obtenerPrecioFormateado().'<br>';
echo $playeramerica->estaDisponible()? 'Existe producto' : 'Agotado';
?>