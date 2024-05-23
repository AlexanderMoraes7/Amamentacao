<?php

require('../Model/unClasseConfig.php');

$nome=$_POST["nome"];
$email=$_POST["email"];
$senha1=$_POST["senha1"];
$senha2=$_POST["senha2"];

$nome = strtolower($nome);
$email = strtolower($email);

if ($senha1 <> $senha2){
    echo "As senhas não são iguais. Tente novamente.";
}
else{
    $senha1 = md5($senha1);
    $pdo->exec("INSERT INTO USUARIOS(nome, email, senha) VALUES 
            ('$nome','$email', $senha1))");
    echo "Conta criada com sucesso";
}
