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
class Garage{
    private $_razonSocial;//string
    private $_precioPorHora;//double
    private $_autos;//array de autos

    public function __construct($razonSocial = "Autoseguro", $precio= 10.25)
    {
        $this->_razonSocial = $razonSocial;
        $this->_precioPorHora= $precio;
        $this->_autos= array();
    }

    public function MostrarGarage(){
        foreach($this->_autos as $auto ){
            echo Auto::MostrarAuto($auto);
        }
    }

  
    public function Equals($unAuto){

       return in_array($unAuto,$this->_autos);

        
    }

    public function Add($unAuto){
        if(!$this->Equals($unAuto)){
            array_push($this->_autos,$unAuto);
        }
    }

    private function Index($unAuto){
        for($i=0;$i<count($this->_autos);$i++){
            if($unAuto->Equals($this->_autos[$i])){
                return $i;
            }
        }
    }

    public function Remove($unAuto){
        if($this->Equals($unAuto)){//si el auto existe
            //eliminar
            $index= $this->Index($unAuto);
            unset($this->_autos[$index]);
        }else{
            echo "No se pudo eliminar";
        }
        
    }
}
?>