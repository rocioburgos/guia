<?php
abstract class FiguraGeometrica
{
    protected $_color;
    protected $_perimetro;
    protected $_superficie;
    
    public function __construct() {
        $this->_color= "";
    }


    //Metodos getters y setters para _color
    public function getColor(){

        return $this->_color;
    }

    public function setColor($color){
        $this->_color= $color;
    }


    //Metodo virtual(todos son virtuales) para ToString

    public function ToString(){}

    //Inicializa los valores de superficie y perimetro, llamados en el constructor derivado
    abstract protected  function CalcularDatos();

    abstract protected function Dibujar();

}


class Rectangulo extends FiguraGeometrica
{
    private $_ladoUno;
    private $_ladoDos;

     function __construct($l1, $l2) {
        parent::__construct();
       
        $this->_ladoUno=$l1;
        $this->_ladoDos=$l2;  

        $this->CalcularDatos();
    }

    protected function CalcularDatos(){
        $this->_perimetro=($this->_ladoUno*2)+($this->_ladoDos*2);
        $this->_superficie=$this->_ladoUno*$this->_ladoDos;
    }

    public function ToString()
    {
         echo "<div>". $this->Dibujar() . "</div>";
        
    }


    public function Dibujar(){
        
        echo"<font color='".$this->getColor()."' >";
       echo "color: ". $this->getColor()."<br>";
        //$retorno="";
        for($i=0; $i<$this->_ladoUno; $i++)//horizontal
        {
           //$retorno."*";
           echo "*"; 
           for($j=1;$j<$this->_ladoDos; $j++)//vertical
            {
                echo "*";                
            }
    
                echo "<br>";
        }

        echo "</font>";

       
        //return $rt;
    }
}

    class Triangulo extends FiguraGeometrica
    {
        private $_altura;
        private $_base;
        public function __construct($altura,$base)
        {
            parent::__construct();
            $this->_altura=$altura;
            $this->_base=$base;
            $this->CalcularDatos();
        }
        protected function CalcularDatos()
        {
            $this->_perimetro=0;
            $this->_superficie=($this->_base*$this->_altura)/2;
        }
        public function Dibujar(){
            $cantidadAsteriscos = 1;
            echo "<div style='color:$this->_color;text-align:center'>";
            for($k=1;$k<=$this->_altura;$k++){
                if($k==$this->_altura){
                    for($i=1;$i<=$this->_base;$i++){
                        echo "*";
                    } 
                }
                else{
                    for($i=1;$i<=$cantidadAsteriscos;$i++){
                        echo "*";
                    }
                }
                if($cantidadAsteriscos+(int)($this->_altura/$this->_base)<$this->_base){
                    $cantidadAsteriscos+=(int)($this->_altura/$this->_base);            
                }
                if($cantidadAsteriscos==0)
                {
                    $cantidadAsteriscos=1;
                }
                echo "</br>";
            }
            echo "</span>";
        }
    

        public function ToString()
        {
            echo "<div>"."Color: ". $this->getColor()."<br>". $this->Dibujar() . "</div>";
        }
    }
  


