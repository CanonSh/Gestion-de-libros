<?php
class Prestamo {
    private Usuario $usuario;
    private Libro $libro;
    private string $fechaPrestamo;
    private ?string $fechaDevolucion;

    public function __construct(Usuario $usuario, Libro $libro) {
        $this->usuario = $usuario;
        $this->libro = $libro;
        $this->fechaPrestamo = date("Y-m-d");
        $this->fechaDevolucion = null;
    }

    public function devolver(): void {
        $this->fechaDevolucion = date("Y-m-d");
        $this->libro->devolver();
    }

    public function __toString(): string {
        $dev = $this->fechaDevolucion ? "Devuelto el {$this->fechaDevolucion}" : "Aún no devuelto";
        return "{$this->usuario->getNombre()} prestó '{$this->libro->getTitulo()}' el {$this->fechaPrestamo} - {$dev}";
    }
}
?>