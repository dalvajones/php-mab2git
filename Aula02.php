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
      // estarei misturando php com html
      $nome = "Emerson"; // atribindo texto a variavel
      $idade = 40; // tipo de dados numerico
      $salario = 3000.00; // float ou double
      $bloqueado = true ; // tipo de dados boleano(true e false);
      // tipo saida 
       echo "Nome : " . $nome;
      
    ?>
    <br>
    <?php
        print("<p>Idade : " . $idade ."</p>");
        
        echo ("<p>salario : " . $salario ."<p>");
        print_r("<p>bloqueado : ". $bloqueado."</p>");
    
    ?>
</body>
</html>