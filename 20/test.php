<?php
require_once "./punto.php";
require_once "./rectangulo.php";

    $v1 = new Punto(2,1);
    $v3 = new Punto(7,3);
    $rec = new Rectangulo2($v1,$v3);
    echo $rec->Dibujar();
?>