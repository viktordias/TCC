<?php
class Dados{ 
    public $id;
    public $valor;

}   

class minemonico{
    public $NOP = 00;
    public $STA = 16;
    public $LDA = 32;
    public $ADD = 48;
    public $OR = 64;
    public $AND = 80;
    public $NOT = 96;
    public $JMP = 128;
    public $JN = 144;
    public $JZ = 160;
    public $HLT = 240;
}

class programa{
    public $id;
    public $dado;
    public $minemonico;
    
}



?>