
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processador Neander</title>
</head>

<body>
    <?php
    include "nucleo.php";
    include "classes.php";
    include "Memoria.php";
    $mem = new Armazenamento();
    $nu =  new nucleo();
    $programa = [
        "0    2       NOP",
        "1    5       NOP",
        "2   55  50   ADD 50",
        "4  159  10   JN  10",
        "6   16 129   STA 129",
        "8   80 123   AND 123",
       "10   16 129   STA 129",
       "12  240       HLT",
    ];
    $memoria =  [
        "128"  =>  "2",
        "129"  =>  "3",
        "130"  =>  "4",
        "131"  =>  "0",
        "132"  =>  "2",
        "133"  =>  "0",
    ];

    $mem->setPrograma($programa);
    $mem->setMemoria($memoria);

    $split;
    

    $nu->lerPrograma($programa,$memoria);
    /*for ($i = 0; $i < sizeof($programa); $i++) {
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
           echo "<br>";
        }
    }*/

    echo($nu->getAC());     


    ?>
</body>

</html>