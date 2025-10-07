<?php
class Biblioteca {
    private array $libros = [];
    private array $prestamos = [];

    public function agregarLibro(Libro $libro): void {
        $this->libros[] = $libro;
    }

    public function buscarPorTitulo(string $titulo): ?Libro {
        foreach ($this->libros as $libro) {
            if (stripos($libro->getTitulo(), $titulo) !== false) {
                return $libro;
            }
        }
        return null;
    }

    public function buscarPorAutor(string $nombreAutor): array {
        return array_filter($this->libros, fn($l) => stripos($l->getAutor()->getNombre(), $nombreAutor) !== false);
    }

    public function buscarPorCategoria(string $nombreCategoria): array {
        return array_filter($this->libros, fn($l) => stripos($l->getCategoria()->getNombre(), $nombreCategoria) !== false);
    }

    public function prestarLibro(Libro $libro, Usuario $usuario): void {
        if (!$libro->estaDisponible()) {
            throw new Exception("El libro '{$libro->getTitulo()}' no está disponible.");
        }
        $libro->prestar();
        $this->prestamos[] = new Prestamo($usuario, $libro);
    }

    public function listarLibros(): array {
        return $this->libros;
    }

    public function listarPrestamos(): array {
        return $this->prestamos;
    }
}
?>