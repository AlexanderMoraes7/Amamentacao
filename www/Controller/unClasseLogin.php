<?php

require('../Model/unClasseConfig.php');

$email=$_POST["email"];
$senha=$_POST["senha"];
$email = strtolower($email);
$senha = md5($senha);

$resultado = $pdo->query("SELECT email, senha FROM USUARIOS WHERE email = '$email'");
if (!$resultado) {
    echo "E-mail ou senha não encontrados" . $pdo->errorInfo()[2];
}
else {
    $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);
}
//
if ($dados[0] == "") {
    echo "E-mail não encontrado";
}

if (($dados[0]["email"] == $email) and ($dados[0]["senha"] == $senha)){
    echo("e-mail e senha igual ");
}
else{
    echo("e-mail ou senha são diferentes");
}
exit();