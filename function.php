<?php
   /*
    Estaremos trabalhando  com função.
   */

   // 1º forma de declaração 'nomeada ', tem argumento
  $numero01 = 10;
  $numero02 = 30;
  Adicao();

   function Adicao(){
    global $numero01, $numero02;
     $resultado = $numero01 + $numero02;
     echo "Adição:" . $resultado;
   }

   // chamar a função
   Adicao();

//                 10      30
function Adicao_( $par01, $par2, $x ){
    //   40          10       30
    $resultado =  $par01 + $par2+ $x;
    //                40    
    echo "Adição:" . $resultado;
}

Adicao_(200, 1000, 1);
//       10          30
Adicao_($numero01, $numero02,4);


function Subtracao( $arg1, $arg2, $arg3, $arg4 ){
    $resultado = $arg1 - $arg2 - $arg3 - $arg4 ;  
    echo "valor : " . $resultado; 
}
$v = array(200,300,500,100); 
$n1= 200;
$n2 = 400;
$n3 = 500;
$n4 = 1000;
Subtracao(200,100,4000,300);

Subtracao($v[0],$v[1],$v[2],$v[3]);

Subtracao($n1, $n2, $n3, $n4);

// função com argumento e palavra reservada

 //c = 2 x 3.14 x r

 function Circuferencia($raio){
       $c = 2 * 3.14 * $raio;
       // variavel, array
       return  $c;
 }


 $valor = Circuferencia(10);

 echo "O Comprimento e : " . $valor;
 $valor = 40;
 echo "O Comprimento e : " . $valor;

echo $valor = Circuferencia(60);


?>