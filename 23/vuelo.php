<?php

/* Vuelo
Atributos privados: _fecha (DateTime), _empresa (string) _precio (double), _listaDePasajeros (array de tipo Pasajero),
 _cantMaxima (int; con su getter). Tanto _listaDePasajero como _cantMaxima sólo se inicializarán en el constructor. 
Crear el constructor capaz de que de poder instanciar objetos pasándole como parámetros:
i.   La empresa y el precio.
ii.  La empresa, el precio y la cantidad máxima de pasajeros.
Agregar un método getter, que devuelva en una cadena de caracteres toda la información de un vuelo: fecha, empresa, precio, cantidad máxima de pasajeros, y toda la información de todos los pasajeros.
Crear un método de instancia llamado AgregarPasajero, en el caso que no exista en la lista, se agregará (utilizar Equals). Además tener en cuenta la capacidad del vuelo. El valor de retorno de este método indicará si se agregó o no.
Agregar un método de instancia llamado MostrarVuelo, que mostrará la información de un vuelo.
Crear el método de clase “Add” para que permita sumar dos vuelos. 
    El valor devuelto deberá ser de tipo numérico, y representará el valor recaudado por los vuelos. 
    Tener en cuenta que si un pasajero es Plus, se le hará un descuento del 20% en el precio del vuelo.
Crear el método de clase “Remove”, que permite quitar un pasajero de un vuelo, siempre y cuando el pasajero esté en dicho vuelo 
    , caso contrario, informarlo.    
        El método retornará un objeto de tipo Vuelo.
*/

class Vuelo{
    private $_fecha;
    private $_empresa;
    private $_precio;
    private $_listaDePasajeros;
    private $_cantMaxima;
        function __construct($empresa,$precio,$cantMaxima=0){
            $this->_fecha = new DateTime;
            $this->_empresa = $empresa;
            $this->_precio = $precio;
            $this->_cantMaxima = $cantMaxima;
            $this->_listaDePasajeros = array();
        }

        public function GetInfoVuelo(){
            $retorno = "Fecha: ".$this->_fecha->format('Y-m-d').", Empresa: $this->_empresa,
            Precio: $this->_precio, Cant.Maxima: $this->_cantMaxima, Pasajeros:
            <br/>";
            foreach($this->_listaDePasajeros as $pasajero)
            {        
                $retorno = $retorno.$pasajero->GetInfoPasajero()."</br>";
            }
            return $retorno;
        }
        public static function MostrarVuelo($vuelo){
            echo $vuelo->GetInfoVuelo();
        }
        public function AgregarPasajero($nuevoPasajero){
            if(Count($this->_listaDePasajeros) < $this->_cantMaxima){
                $existe = false;
                foreach($this->_listaDePasajeros as $pasajero)
                {
                    if($nuevoPasajero->Equals($pasajero))
                    {
                        $existe = true;
                        break;
                    }
                }
                if(!$existe){
                    $this->_listaDePasajeros[] = $nuevoPasajero;
                    return true;
                }
            }
            return false;
        }
        public static function Add($vuelo1, $vuelo2){
            return self::PrecioTotalVuelo($vuelo1) + self::PrecioTotalVuelo($vuelo2);
        }
        private static function PrecioTotalVuelo($vuelo){
            $precioTotal = 0;
            $precio = $vuelo->_precio;
            $precioConDescuento = $precio - $precio * 0.20;
            foreach($vuelo->_listaDePasajeros as $pasajero)
            {
                if($pasajero->__Get("_esPlus"))
                {
                    $precioTotal += $precioConDescuento;
                }
                else
                {
                    $precioTotal += $precio;
                }
            }
            return $precioTotal;
        }
        public static function Remove($vuelo,$pasajero){
            foreach($vuelo->_listaDePasajeros as $key => $p)
            {
                if($p->Equals($pasajero))
                {
                    unset($vuelo->_listaDePasajeros[$key]);
                    break;
                }
            }
            return $vuelo;
        }
    }

?>