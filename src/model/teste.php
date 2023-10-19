<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão</title>
</head>
<body>
    <?php
    $programa = $_GET["Txtvalor"];
    $valor = intval($num);
    
    $split = [];

        for ($i=0; $i < sizeof($programa); $i++) { 
            # code...
            $split.explode(" ",$programa[$i]);
            for ($i=0;$i < sizeof($split); $i++) { 
                # code...
                echo("split:" + $split[$i]);
            }
        }

    ?>

    
</body>
</html>