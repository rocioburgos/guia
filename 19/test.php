<?php
    require "./clases_19.php";

    $rectangulo = new Rectangulo(4,3);
    $rectangulo->setColor("red");


    echo $rectangulo->ToString();

    echo "<br><br>";

    $triangulo= new Triangulo(6,6);
    $triangulo->setColor("green");

    echo $triangulo->ToString();

?>