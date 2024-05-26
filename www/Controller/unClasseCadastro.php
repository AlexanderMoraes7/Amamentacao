<?php
require('../Model/unClasseConfig.php');

$nome=$mysqli->real_escape_string($_POST["nome"]);
$sobrenome=$mysqli->real_escape_string($_POST["sobrenome"]);
$email=$mysqli->real_escape_string($_POST["email"]);
$senha1=$mysqli->real_escape_string($_POST["senha1"]);
$senha2=$mysqli->real_escape_string($_POST["senha2"]);
$nome = strtolower($nome);              // Converte tudo para minúscula
$nome = ucfirst($nome);                 // Converte primeira letra para maiúscula
$sobrenome = strtolower($sobrenome);
$sobrenome = ucfirst($sobrenome);
$email = strtolower($email);

try {
    if (strlen($nome) == 0) {
        echo "Nome não pode ser vazio";
    } elseif (strlen($sobrenome) == 0) {
        echo "Sobrenome não pode ser vazio";
    } elseif (strlen($email) == 0) {
        echo "E-mail não pode ser vazio";
    } elseif ((strlen($senha1) == 0) or (strlen($senha2) == 0)) {
        echo "Senha não pode ser vazia";
    } elseif ($senha1 <> $senha2){
        echo "As senhas não são iguais. Digite novamente.";
    } else{
        $senha1 = password_hash($senha1, PASSWORD_DEFAULT);
        $mysqli->query("INSERT INTO USUARIOS(nome, sobrenome, email, senha) VALUES 
                ('$nome', '$sobrenome','$email', '$senha1')");
        echo "Conta criada com sucesso";
        }
    } catch (PDOException $e) {
    echo $e->getMessage();
}