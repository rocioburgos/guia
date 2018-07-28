<?php
/* Métodos (en Fabrica) 
RetornarCostos (de instancia, privado): Retorna el dinero que la fábrica tiene que gastar 
    en concepto de salario de todos sus operarios. 
MostrarOperarios (de instancia, privado): Recorre el Array de operarios de la fábrica y 
    muestra el nombre, apellido y el salario de cada operario (utilizar el método Mostrar de operario). 
MostrarCosto (de clase): muestra la cantidad total del costo de la fábrica en concepto de salarios (utilizar el método RetornarCostos). 
Crear el método de clase “Equals”, recibe una Fabrica y un Operario. 
    Retronará un booleano informando si el operario se encuentra en la fábrica o no. Reutilizar código. 
Add (de instancia): Agrega un operario al Array de tipo Operario, 
    siempre y cuando haya lugar disponible en la fábrica y el operario no se encuentre ya ingresado. 
    Reutilizar código. Retorna TRUE si pudo ingresar al operario, FALSE, caso contrario.
Remove (de instancia): Recibe a un objeto de tipo Operario y lo saca de la fábrica, siempre 
    y cuando el operario se encuentre en el Array de tipo Operario. Retorna TRUE si pudo quitar al operario, 
    FALSE, caso contrario.
    
Crear los objetos necesarios en testFabrica.php como para probar el buen funcionamiento de las clases. 

*/
class Fabrica{
    private $_cantMaxOperarios;
    private $_operarios;
    private $_razonSocial;
    function __construct($razonSocial){
        $this->_cantMaxOperarios = 5;
        $this->_operarios = array();
        $this->_razonSocial = $razonSocial;
    }
    public function RetornarCostos(){
        $total = 0;
        foreach($this->_operarios as $operario){
            $total += $operario->GetSalario();
        }
        return $total;
    }
    public function MostrarOperarios()
    {
        $retorno = "";
        foreach($this->_operarios as $operario){
            $retorno = $retorno.$operario->Mostrar();
        }
        return $retorno;
    }
    public static function MostrarCosto($fabrica){
        return $fabrica->RetornarCostos();
    }
    public static function Equals($fabrica,$operario){
        foreach($fabrica->_operarios as $oper){
            if($oper->Equals($operario)){
                return true;
            }
        }
        return false;
    }
    public function Add($operario){
        if(!Fabrica::Equals($this,$operario) && count($this->_operarios) < $this->_cantMaxOperarios){
            $this->_operarios[] = $operario;
            return true;            
        }
        return false;
    }
    public function Remove($operario){
        foreach($this->_operarios as $i => $oper){
            if($oper->Equals($operario)){
                unset($this->_operarios[$i]);
                return true;
            }
        }
        return false;
    }
}
?>