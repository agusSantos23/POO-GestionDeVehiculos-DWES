<?php
class Moto extends Vehiculo {
  public function __construct(
    string $marca,
    string $modelo,
    string $color,
    protected int $cilindrada
  ) {
    parent::__construct($marca, $modelo, $color);
  }
  public function mover() {
    echo "La moto esta en movimiento";
  }
  public function detener() {
    echo "La moto se ha detenido";
  }
  public function obtenerInformacion(): string {
    return parent::obtenerInformacion() . ", Cilindrada: {$this->cilindrada}";
  }
  public function getCilindrada(): int {
    return $this->cilindrada;
  }
  public function setCilindrada(int $new): void {
    $this->cilindrada = $new;
  }
}