<?php
class Categoria {
    private string $nombre;
    private string $descripcion;

    public function __construct(string $nombre, string $descripcion = "") {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }


    public function __toString(): string {
        return $this->nombre;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}
?>