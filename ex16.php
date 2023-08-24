<?php

$qtdMaca = 10;
$resultado=0;

if($qtdMaca < 12 ){
     $resultado = 1.30 * $qtdMaca;
}else{
    $resultado = 1.00 * $qtdMaca;
}

echo "Valor da compra R$" .   number_format( $resultado,2,",",".");

?>