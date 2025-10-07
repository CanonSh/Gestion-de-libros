<?php
class Categoria {
    private string $nombre;
    private string $descripcion;

    public function __construct(string $nombre, string $descripcion = "") {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getDescripcion(): string {
        return $this->descripcion;
    }

    public function __toString(): string {
        return $this->nombre;
    }
}
?>