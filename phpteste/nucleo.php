<?php
include("instrucao.php");

class nucleo{
    public $AP;
    public $AC;
    public $CA;
    

    public function getAP(){
        return $this->AP;
    }
    public function setAP($AP){
        $this->AP = $AP;
    }
    public function getAC(){
        return $this->AC;
    }
    public function setAC($AC){
        $this->AC = $AC;
    }
    public function getCA(){
        return $this->CA;
    }
    public function setCA($CA){
        $this->CA = $CA;
    }

    public function decotificador($vetor){
            $ins = new instrucoes();
            # code...
            if ($vetor != 0){
                $ins->analise($vetor,0);
            }
        #echo $vetor;
    }

   
    public function lerPrograma($programa){
        $nu =  new nucleo();
        for ($i = 0; $i < sizeof($programa); $i++) {
            # code...
            //echo $i;
            $split = explode(" ", $programa[$i]);
            //echo "<br>";
            # code...
            unset($split[0]);
            //$split = str_replace(""," ",$split);
            //echo $split[1];
            #echo "split " , $i;
            for ($j = 1; $j < sizeof($split); $j++) {
                # code...
                
                $nu->decotificador((int)$split[$j]);
                #echo $split[$j] , " posicao de j = " , $j;
                //echo $j;
            #echo "<br>";
            }
        }
    }

    public function lerDados($memoria,$posicao){
        return $this->$memoria[$posicao];
    }

}




?>