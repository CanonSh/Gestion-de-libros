<?php
class Libro {
    private string $titulo;
    private Autor $autor;
    private Categoria $categoria;
    private bool $disponible;

    public function __construct(string $titulo, Autor $autor, Categoria $categoria) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->categoria = $categoria;
        $this->disponible = true;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }

    public function getAutor(): Autor {
        return $this->autor;
    }

    public function getCategoria(): Categoria {
        return $this->categoria;
    }

    public function estaDisponible(): bool {
        return $this->disponible;
    }

    public function prestar(): void {
        if (!$this->disponible) {
            throw new Exception("El libro '{$this->titulo}' no está disponible.");
        }
        $this->disponible = false;
    }

    public function devolver(): void {
        $this->disponible = true;
    }

    public function __toString(): string {
        $estado = $this->disponible ? "Disponible" : "Prestado";
        return "{$this->titulo} ({$this->autor->getNombre()} - {$this->categoria->getNombre()}) - {$estado}";
    }
}
?>