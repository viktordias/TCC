<?php
  

class Armazenamento{
    public $Programa;
    public $Memoria;
    

    public function getPrograma(){
        return $this->Programa;
    }
    public function setPrograma($Programa){
        $this->Programa = $Programa;
    }
    public function getMemoria(){
        return $this->Memoria;
    }
    public function setMemoria($Memoria){
        $this->Memoria = $Memoria;
    }

}




?>