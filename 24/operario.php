<?php
/*GetNombreApellido (de instancia): Retorna un String que tiene concatenado el nombre y el apellido del operario separado por una coma. 
Mostrar (de instancia): Retorna un String con toda la información del operario. Utilizar el método GetNombreApellido. 
Mostrar (de clase): Recibe un operario y retorna un String con toda la información del mismo (utilizar el método Mostrar de instancia) 
Crear el método de instancia “Equals” que permita comparar al objeto actual con otro de tipo Operario. Retronará un booleano informando si el nombre, apellido y el legajo de los operarios coinciden al mismo tiempo.
 */
    class Operario{
        private $_apellido;
        private $_legajo;
        private $_nombre;
        private $_salario;
        function __construct($legajo,$apellido,$nombre){
            $this->_legajo = $legajo;
            $this->_apellido = $apellido;
            $this->_nombre = $nombre;
            $this->_salario = 100;
        }
        public function __GET($name){
            return $this->$name;
        }
        public function GetSalario(){
            return $this->_salario;
        }
        public function SetAumentarSalario($porcentaje){
            $this->_salario += $this->_salario*$porcentaje/100;
        }
        public function GetNombreApellido(){
            return "$this->_nombre, $this->_apellido";
        }
        public function Mostrar(){
            return "Nombre: ".$this->GetNombreApellido()."<br/>
                    Legajo: ".$this->_legajo."<br/>
                    Salario: ".$this->_salario."<br/>";
        }
        //No se puede tener 2 métodos con el mismo nombre por más que uno sea de instancia y el otro de clase.
        public static function MostrarEstatico($operario){
            return $operario->Mostrar();
        }
        public function Equals($operario2){
            if($this->GetNombreApellido() == $operario2->GetNombreApellido() && $this->_legajo == $operario2->_legajo){
                return true;
            }
            return false;
        }
    }
    
?>