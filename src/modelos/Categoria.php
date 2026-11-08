<?php
declare(strict_types =1);

class Categoria{
    private string $nombre;

    public function __construct(string $n){
        $this->nombre = $n;
    }

    public function obtenernombre(): string{
        return $this->nombre;

    }
}


?>