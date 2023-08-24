<?php
// pegar os dados  vindo do formulario

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$estado = $_POST['estado'];
$sexo = $_POST['sexo'];

if (isset($_POST['op01'])) {
    $php = $_POST['op01'];
} else {
    $php = null;
}

if (isset($_POST['op02'])) {
    $mysql = $_POST['op02'];
} else {
    $mysql = null;
}

if(isset($_POST['op03'])){
    $html = $_POST['op03'];
}else{
    $html = null;
}


$mensagem = $_POST['ms'];
$senha = $_POST['senha'];

echo "<p>Nome : $nome </p>";
echo "<p>E-mail : $email </p>";
echo "<p>Idade : $idade </p>";
echo "<p>Sexo : $sexo </p>";
echo "<p>Revista : $php  $mysql , $html </p>";
echo "<p>Mensagem : $mensagem </p>";
echo "<p>Senha : $senha </p>";
