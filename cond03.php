<?php
   
   $numero01 = 10 ;
   $numero02 = 30 ;
   $resultado ="";
   $operador = "+";
  // if($operador == "+"){}
   switch($operador){
       case "+":
            $resultado =  $numero01 + $numero02;
         break;
       case "-" :
              $resultado =  $numero01 - $numero02;
        break; 
       case "*" :
            $resultado =  $numero01 * $numero02;
        break; 
        case "/" :
            $resultado =  $numero01 / $numero02;
         break; 
        default:
         echo "somente os op. básico";
        break;
   } 

   echo $resultado;

?>