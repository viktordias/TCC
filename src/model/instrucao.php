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

    #Soma uma posiçao de memoria ao acumulador
    public function OPadd($ac ,
     $operadorPrimario , $operadorSecundario){
        return $this->operadorSecundario != NULL ?
         $operadorPrimario+ $operadorSecundario : $ac + $operadorPrimario ;
    }

    #Memoria recebe o valor no acumulador
    public function OPsta($dado){
        return $dado;
    }
    
    #acumulador recebe posiçao de memoria
    public function OPlda($dado){
        return $this->$dado;
    }

    #acumulador recebe Men OR AC
    public function OPor($AC , $DADO){
        return $this->$DADO | $AC;
    }

    #acumulador recebe Men AND AC
    public function OPand($AC , $DADO){
        return $this->$DADO & $AC;
    }

    #complemento de 1 no AC
    public function OPnot($dado){
        return ~$dado;
    }

    #complemento de 1 no AC
    public function OPjmp($dado){
        return ~$dado;
    }

    public function decotificador(){

    }
    
    public function lerPrograma(){
        
    }
    public function lerDados(){
        
    }

}




?>