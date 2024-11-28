<?php
require('./Vehiculo.php');

require('./Coche.php');
require('./Moto.php');
require('./Camion.php');
require('./Concesionario.php');



$coche = new Coche("Tesla", "Model3", "blanco", 4);
$moto = new Moto("Yamaha", "24389K", "azul", 50);


$concesionario = new Concesionario();
$concesionario->mostrarVehiculo($coche);  
$concesionario->mostrarVehiculo($moto); 
