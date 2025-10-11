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

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }


    /**
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }
}
?>