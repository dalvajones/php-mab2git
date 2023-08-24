<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      // iremos trabalhar com operadores aritmetico
        /*
           + adição
           - subtração
           * multiplicação
           / divisão
           % modulo
           ** expoente
        
        */
     $numero_1 = 100;
     $numero_2 = 4;
     $resultado =  $numero_1 + $numero_2 ; // 100 + 4 = 104
?>
     <p>
        <?php  echo $numero_1. " + " .$numero_2 ."=".$resultado ?>
    </p>

    <p>
        <?php  
        $resultado =  $numero_1 - $numero_2 ; 
        echo $numero_1. " - " .$numero_2 ."=".$resultado ?>
    </p>


    <p>
        <?php  
        $resultado =  $numero_1 * $numero_2 ; 
        echo $numero_1. " * " .$numero_2 ."=".$resultado ?>
    </p>

    <?php  
        $resultado =  $numero_1 % 3 ; 
        echo $numero_1. " % " .$numero_2 ."=".$resultado ?>
    </p>
    <?php  
        $resultado =  $numero_1 / $numero_2 ; 
        echo $numero_1. " /" .$numero_2 ."=".$resultado ?>
    </p>
    <?php  
        $resultado =  2 ** 3 ; 
        echo " 2  ^  3 =".$resultado; ?>
    </p>


</body>
</html>