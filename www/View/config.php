<?php
include("protect.php");

if(!isset($_SESSION["nome"])) {
    die("Você não está autorizado a acessar essa página.<p><a href=\"index.html\">Logar</a></p>");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apoio á Amamentação</title>
</head>
<body>
    <div class="Container">
        <div class="Top">
            <h1>Configuração</h1>
            <p>
                <a href="logout.php">Sair</a>
            </p>
        </div>
        <div class="Middle">
            <!-- Conteúdo da seção do meio -->
        </div>
        <div class="Bottom">
            <!-- Conteúdo da seção de baixo -->
        </div>
    </div>
</body>
</html>