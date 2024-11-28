<?php
abstract class Vehiculo {
  public function __construct(
    protected string $marca,
    protected string $modelo,
    protected string $color = "Negro"
  ) {}

  abstract public function mover();
  abstract public function detener();

  public function obtenerInformacion(): string {
    return "Marca: {$this->marca}, Modelo: {$this->modelo}, Color: {$this->color}";
  }
  public function __tostring(): string {
    return "Vehiculo [Marca: {$this->marca}, Modelo: {$this->modelo}, Color: {$this->color}]";
  }

  //esto es asi??
  public function __get($property) {
    if (property_exists($this, $property)) {
      return $this->$property;
    } else {
      return "Propiedad '$property' no accesible o no existe.";
    }
  }
}