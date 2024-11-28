<?php

class Coche extends Vehiculo {
  public function __construct(
    string $marca,
    string $modelo,
    string $color,
    protected int $numeroPuertas
  ) {
    parent::__construct($marca, $modelo, $color);
  }
  public function mover() {
    echo "El coche esta en movimiento";
  }
  public function detener() {
    echo "El coche se ha detenido";
  }
  public function obtenerInformacion(): string {
    return parent::obtenerInformacion() . ", Numero de puertas: {$this->numeroPuertas}";
  }
  public function getNumeroPuertas(): int {
    return $this->numeroPuertas;
  }
  public function setNumeroPuertas(int $new): void {
    $this->numeroPuertas = $new;
  }
}