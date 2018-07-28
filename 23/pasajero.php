<?php

/* Pasajero
Atributos privados: _apellido (string), _nombre (string), _dni (string), _esPlus (boolean)
Crear un constructor capaz de recibir los cuatro parámetros.
Crear el método de instancia “Equals” que permita comparar dos objetos Pasajero. Retornará TRUE cuando los _dni sean iguales.
Agregar un método getter llamado GetInfoPasajero, que retornará una cadena de caracteres con los atributos concatenados del objeto.
Agregar un método de clase llamado MostrarPasajero que mostrará los atributos en la página.

*/

    class Pasajero{
        private $_apellido;
        private $_nombre;
        private $_dni;
        private $_esPlus;
        function __construct($apellido,$nombre,$dni,$esPlus){
            $this->_apellido = $apellido;
            $this->_nombre = $nombre;
            $this->_dni = $dni;
            $this->_esPlus = $esPlus;
        }
        public function __Get($property){
            return $this->$property;
        }
        public function Equals($pasajero2){
            if($this->_dni == $pasajero2->_dni /* $pasajero2->__Get("_dni")*/){
                return true;
            }
            return false;
        }
        public function GetInfoPasajero(){
            return "<br/>Nombre: ".$this->_nombre." ".$this->_apellido."<br/>DNI: ".$this->_dni;
        }
        public static function MostrarPasajero($pasajero){
            echo $pasajero->GetInfoPasajero();
        }
    }
?>
