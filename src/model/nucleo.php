
<?php


class nucleo{ 
    
    public $CA;
    public $AC;
    public $AP;


    public function __construct($AC ,$AP , $CA) 
    {
        $this->$AC = $AC;
        $this->$AP = $AP;
        $this->$CA = $CA;
    }

    public function getAC(){
        return $this->AC;
    }

    public function getAP(){
        return $this->AP;
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
    
    public function lerPrograma($programa){
        $split = [];

        for ($i=0; $i < sizeof($programa); $i++) { 
            # code...
            $split.explode(" ",$programa[$i]);
            for ($i=0;$i < sizeof($split); $i++) { 
                # code...
                print("split:" + $split[$i]);
            }
        }
    }
    public function lerDados(){
        
    }

}   



?>