<?php

interface VehiculoElectrico {
  public function cargarBateria(): void;
  public function estadoBateria(): string;
}