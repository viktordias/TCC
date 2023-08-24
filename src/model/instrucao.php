<?php
  

class instrucoes{
    public $opcode;
    public $operadorPrimario;
    public $operadorSecundario;
    


    public function __construct($opcode ,
    $operadorPrimario , $operadorSecundario) 
    {
        $this->$opcode = $opcode;
        $this->$operadorPrimario = $operadorPrimario;
        $this->$operadorSecundario = $operadorSecundario;
    }

    public function OPadd($ac ,
     $operadorPrimario , $operadorSecundario){
        return $this->operadorSecundario != NULL ?
         $operadorPrimario+ $operadorSecundario : $ac + $operadorPrimario ;
    }

    public function OPsta($dado){
        return $dado;
    }
    
    public function getCA(){
        return $this->CA;
    }

    public function setAC(){
        return $this->AC;
    }

    public function setAP(){
        return $this->AP;
    }

    public function setCA(){
        return $this->CA;
    }

    public function decotificador(){

    }
    
    public function lerPrograma(){
        
    }
    public function lerDados(){
        
    }

}




?>