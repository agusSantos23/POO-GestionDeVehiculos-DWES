<?php

class Camion extends Vehiculo {
  public function __construct(
    string $marca,
    string $modelo,
    string $color,
    protected float $capacidad
  ) {
    parent::__construct($marca, $modelo, $color);
  }
  public function mover() {
    echo "El camion esta en movimiento";
  }
  public function detener() {
    echo "El camion se ha detenido";
  }
  public function obtenerInformacion(): string {
    return parent::obtenerInformacion() . ", Capacidad: {$this->capacidad}";
  }
  public function getCapacidad(): float {
    return $this->capacidad;
  }
  public function setCapacidad(float $new): void {
    $this->capacidad = $new;
  }
}