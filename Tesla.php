<?php

class Tesla implements VehiculoElectrico {
  private int $nivelBateria;
  public function __construct(int $nivelBateria) {
    $this->nivelBateria = $nivelBateria;
  }
  public function cargarBateria(): void {
    $this->nivelBateria = 100;
  }
  public function estadoBateria(): string {
    return "El nivel de bateria es: {$this->nivelBateria}%";
  }
}
