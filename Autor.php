<?php
class Autor {
    private string $nombre;
    private string $biografia;

    public function __construct(string $nombre, string $biografia = "") {
        $this->nombre = $nombre;
        $this->biografia = $biografia;
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
     * Get the value of biografia
     */ 
    public function getBiografia()
    {
        return $this->biografia;
    }
}
?>