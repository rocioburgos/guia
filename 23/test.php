<?php
require_once "./pasajero.php";
require_once "./vuelo.php";
$pasajero1 = new Pasajero("Potter","Harry","111111111",true);
$pasajero2 = new Pasajero("Weasley","Ron","222222222",false);
$pasajero3 = new Pasajero("Granger","Hermione","333333333",false);
$pasajero4 = new Pasajero("Black","Sirius","444444444",true);
$vuelo = new Vuelo("FlyBondi",100,3);
echo "Agregando pasajeros y mostrar pasajero. <br>";
if($vuelo->AgregarPasajero($pasajero1))
 {   Pasajero::MostrarPasajero($pasajero1);echo "<br>";}
else
   { echo "No se pudo<br>";}
if($vuelo->AgregarPasajero($pasajero2))
   { Pasajero::MostrarPasajero($pasajero2);echo "<br>";}
else
 {   echo "No se pudo<br>";}
if($vuelo->AgregarPasajero($pasajero3))
  {  Pasajero::MostrarPasajero($pasajero3);echo "<br>";}
else
  {  echo "No se pudo<br>";}
if($vuelo->AgregarPasajero($pasajero4))
   { Pasajero::MostrarPasajero($pasajero4);echo "<br>";}
else
  {  echo "No se pudo<br>";}
  echo "Mostrar vuelo<br>";
Vuelo::MostrarVuelo($vuelo);
echo "Eliminando pasajero 1.<br>";
Vuelo::Remove($vuelo,$pasajero1);
echo "Mostrar despues de borrar<br>";
Vuelo::MostrarVuelo($vuelo);

$vuelo2 = new Vuelo("Flybondi",150,1);
$vuelo2->AgregarPasajero($pasajero4);
echo Vuelo::Add($vuelo,$vuelo2);


?>