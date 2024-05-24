<?php

require('../Model/unClasseConfig.php');

$email=$mysqli->real_escape_string($_POST["email"]);
$senha=$mysqli->real_escape_string($_POST["senha"]);
$email = strtolower($email);

$resultado = "SELECT * FROM USUARIOS WHERE email = '$email'";
$sql_query = $mysqli->query($resultado) or die("E-mail ou senha não encontrados" . $mysqli->error);
$quantidade = $sql_query->num_rows;

if ($quantidade == 1) {
    $usuario = $sql_query->fetch_assoc();

if ($usuario["email"] != $email) {
    die("e-mail ou senha são diferentes");
} elseif (password_verify($senha, $usuario["senha"])) {
    echo("Acesso liberado!");
}else {
    die("e-mail ou senha são diferentes");
}

if(!isset($_SESSION)) {
    session_start();
}

$_SESSION["idusuario"] = $usuario["idusuario"];
$_SESSION["nome"] = $usuario["nome"];

header("Location: ../View/paginaprincipal.php");

}else {
    echo"e-mail ou senha são diferentes";
}