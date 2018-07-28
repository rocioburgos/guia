<?php
    require_once "./fabrica.php";
    require_once "./operario.php";
    $fabrica = new Fabrica("UnaRazon");
    $empleado1 = new Operario("1233","Perez","Juan");
    $empleado2 = new Operario("1234","Perez","Pedro");
    $empleado3 = new Operario("1235","Perez","Mauricio");
    $empleado4 = new Operario("1236","Perez","Mariano");
    $empleado5 = new Operario("1237","Perez","Flavio");
    $empleado6 = new Operario("1238","Perez","Marina");
    $empleado1->SetAumentarSalario(100);
    $empleado3->SetAumentarSalario(300);
    $empleado5->SetAumentarSalario(50);
    if($fabrica->Add($empleado1)){
        echo "Agregado ".$empleado1->GetNombreApellido()."<br/>";
    }
    else{
        echo "No se pudo agregar ".$empleado1->GetNombreApellido()."<br/>";
    }
    if($fabrica->Add($empleado2)){
        echo "Agregado ".$empleado2->GetNombreApellido()."<br/>";
    }
    else{
        echo "No se pudo agregar ".$empleado2->GetNombreApellido()."<br/>";
    }
    if($fabrica->Add($empleado3)){
        echo "Agregado".$empleado3->GetNombreApellido()."<br/>";
    }
    else{
        echo "No se pudo agregar ".$empleado3->GetNombreApellido()."<br/>";
    }
    if($fabrica->Add($empleado4)){
        echo "Agregado ".$empleado4->GetNombreApellido()."<br/>";
    }
    else{
        echo "No se pudo agregar ".$empleado4->GetNombreApellido()."<br/>";
    }
    if($fabrica->Add($empleado5)){
        echo "Agregado ".$empleado5->GetNombreApellido()."<br/>";
    }
    else{
        echo "No se pudo agregar ".$empleado5->GetNombreApellido()."<br/>";
    }
    if($fabrica->Add($empleado6)){
        echo "Agregado ".$empleado6->GetNombreApellido()."<br/>";
    }
    else{
        echo "No se pudo agregar ".$empleado6->GetNombreApellido()."<br/>";
    }
    $fabrica->Remove($empleado5);
    echo Fabrica::MostrarCosto($fabrica);
    echo $fabrica->MostrarOperarios();


?>