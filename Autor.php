<?php
class Autor {
    private string $nombre;
    private string $biografia;

    public function __construct(string $nombre, string $biografia = "") {
        $this->nombre = $nombre;
        $this->biografia = $biografia;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getBiografia(): string {
        return $this->biografia;
    }

    public function __toString(): string {
        return $this->nombre;
    }
}
?>