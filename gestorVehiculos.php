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


final class Bicicleta {
  public function pedalear() {
    echo "La bicicleta pedalea";
  }
}


interface VehiculoElectrico {
  public function cargarBateria(): void;
  public function estadoBateria(): string;
}


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


class Concesionario {
  public function mostrarVehiculo(Vehiculo $vehiculo) {
    echo $vehiculo->obtenerInformacion() . "</br>";
  }
}

$coche = new Coche("Tesla", "Model3", "blanco", 4);
$moto = new Moto("Yamaha", "24389K", "azul", 50);

$concesionario = new Concesionario();
$concesionario->mostrarVehiculo($coche);  
$concesionario->mostrarVehiculo($moto); 