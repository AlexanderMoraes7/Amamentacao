<?php

require('../Model/unClasseConfig.php');

$nome=$_POST["nome"];
$email=$_POST["email"];
$senha1=$_POST["senha1"];
$senha2=$_POST["senha2"];

$email = strtolower($email);

if ($senha1 <> $senha2){
    echo "As senhas não são iguais. Tente novamente.";
}
else{
    $pdo->exec("INSERT INTO USUARIOS(nome, email, senha) VALUES 
            ('$nome','$email', (SELECT md5('$senha1')))");
    echo "Conta criada com sucesso";
}

// $resultado = $pdo->query("SELECT * FROM USUARIOS");
// $resultado->fetchAll(PDO::FETCH_ASSOC);
// echo($resultado);
// exit();
