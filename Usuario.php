<?php
class Usuario {
    private string $nombre;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
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
}
?>