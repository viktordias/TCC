<?php
  

class instrucoes{
    public $opcode;
    public $operadorPrimario;
    public $operadorSecundario;
    


    

    #Soma uma posiçao de memoria ao acumulador
    public function OPadd($ac , $operadorPrimario ){
        return $this-> $ac + $operadorPrimario ;
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

    function analise($mnemonico,$memoria)
    {
        $ins = new instrucoes();
        $nu = new nucleo();
        switch ($mnemonico) {
            case 0:
                # code...
                echo " Instrucao correta";
                break;
            case 16:
                # code...
                echo " Instrucao correta";
                break;
            case 32:
                # code...
                echo " Instrucao correta";
                break;
            case 48:
                # code...
                $nu->setAC($ins->OPadd($nu->getAC() ,$memoria ));
                echo " Instrucao correta";
                break;
            case 64:
                # code...
                echo " Instrucao correta";
                break;
            case 80:
                # code...
                echo " Instrucao correta";
                break;
            case 96:
                # code...
                echo " Instrucao correta";
                break;
            case 128:
                # code...
                echo " Instrucao correta";
                break;
            case 144:
                # code...
                echo " Instrucao correta";
                break;
            case 160:
                # code...
                echo " Instrucao correta";
                break;
            case 240:
                # code...
                echo " Instrucao correta";
                break;
            default:
                # code...
                echo " Instrucao incorreta";
                break;
        }
    }

}




?>