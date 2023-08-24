<?php
// trabalhar com operadores de comparação
/*
  == igual
  != diferente
  <> = diferente
  < menor
  > maior
  <= menor igual
  >= maior igual
  === identico
*/
 $numero01 = 10;
 $numero02 = "10";
 $logico = null;
  // igual
   echo "Comp. Igual";
   $logico =  $numero01 == $numero02;
     echo "<p>".(int)$logico."</p>";
   echo "**********************";
 
   // diferente
   echo "Comp. diferente";
   $logico =  $numero01 != $numero02;
   echo "<p>".(int)$logico."</p>";
   echo "**********************";

   // Identico
   echo "Comp. identico";
   $logico =  $numero01 === $numero02;
   echo "<p>".(int)$logico."</p>";
   echo "**********************";

 // I
 echo "Comp. maior";
 $logico =  $numero01 > $numero02;
 echo "<p>".(int)$logico."</p>";
 echo "**********************";


?>