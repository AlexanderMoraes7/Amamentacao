<?php

require('../Model/unClasseConfig.php');

$email=$_POST["email"];
$senha=$_POST["senha"];


if ($senha1 <> $senha2){
    echo "As senhas não são iguais. Tente novamente.";
}
else{
    $pdo->exec("SELECT EMAIL, SENHA FROM USUARIOS");
}

// $resultado = $pdo->query("SELECT * FROM USUARIOS");
// $resultado->fetchAll(PDO::FETCH_ASSOC);
// echo($resultado);
// exit();
