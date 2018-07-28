<?php
/*
Aplicación Nº 22 (Auto - Garage) 
Crear la clase Garage que posea como atributos privados:
_razonSocial (String) 
_precioPorHora (Double)
_autos (Autos[], reutilizar la clase Auto del ejercicio anterior)
Realizar un constructor capaz de poder instanciar objetos pasándole como parámetros:	
i.   La razón social.
ii.  La razón social, y el precio por hora.
Realizar un método de instancia llamado “MostrarGarage”, que no recibirá parámetros y que mostrará todos los atributos del objeto.
Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un objeto de tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.
Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage” (sólo si el auto no está en el garaje, de lo contrario informarlo).
Ejemplo:	$miGarage->Add($autoUno);
Crear el método de instancia “Remove” para que permita quitar un objeto “Auto” del “Garage” (sólo si el auto está en el garaje, de lo contrario informarlo).
Ejemplo:	$miGarage->Remove($autoUno);
En testGarage.php, crear autos y un garage. Probar el buen funcionamiento de todos los métodos.
*/
require_once "./auto.php";
require_once "./garage.php";
    $auto1 = new Auto("Ferrari", "Rojo");
    $auto2 = new Auto("Ferrari", "Azul");
    $auto3 = new Auto("BMW", "Azul", "50");
    $auto4 = new Auto("BMW", "Azul", "70");
    $auto5 = new Auto("Audi", "Blanco", "80" ,date("Y-m-d H:i:s"));

    $garage= new Garage("Mi garage",20);

    echo "Agregando Autos<br>";
    $garage->Add($auto1);
    $garage->Add($auto2);
    $garage->Add($auto3);
    $garage->Add($auto4);
    $garage->Add($auto5);

    
    echo "Mostrar autos:<br>";
    $garage->MostrarGarage();
    echo "<br><br>";

    echo "Borrando el primer auto.<br>";
    $garage->Remove($auto1);
    echo "Garage despues de borrar auto:<br>";
    $garage->MostrarGarage();
    echo "<br><br>";

?>