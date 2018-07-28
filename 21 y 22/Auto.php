<?php
    class Auto
    {
        private $_color;
        private $_precio;
        private $_marca;
        private $_fecha;
        public function __construct($marca = "Fiat", $color = "Rojo", $precio = "150000", $fecha = "22-05-18")
        {
            $this->_color = $color;
            $this->_marca = $marca;
            $this->_precio = $precio;
            $this->_fecha = $fecha;
        }
        public function AgregarImpuestos($valorImpuesto)
        {
           
            $this->_precio = $this->_precio + $valorImpuesto;
            echo "Impuestos agregados, nuevo valor: ".$this->_precio."<br/>";
        }
        public static function MostrarAuto($unAuto)
        {
          
            echo "Marca: ".$unAuto->_marca."<br>Precio: ".$unAuto->_precio."<br>Color: ".$unAuto->_color."<br>Fecha: ".$unAuto->_fecha."<br><br>";
        }
        public function Equals($unAuto)
        {
            if($unAuto->_marca == $this->_marca)
            {
                return true;
            }
            return false;
        }
        public static function Add($unAuto, $otroAuto)
        {
            if($unAuto->_marca == $otroAuto->_marca && $unAuto->_color == $otroAuto->_color)
            {
                $suma = $unAuto->_precio + $otroAuto->_precio;
                //guarda la suma de los precios de ambos autos
                if($suma)
                {//si la suma se pudo hacer, la devuelve. Caso contrario, devuelve 0
                    echo "Resultado de la suma del precio de los dos autos: ".$suma."<br/>";
                    return $suma;
                }
            }
            else
            {
                echo "No se pudo sumar los precios. Los autos ingresados no son iguales <br/>";
                return 0;
            }
        }
    }
?>