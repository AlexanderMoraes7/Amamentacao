<?php
/*

<p>
    <a href="logout.php">Sair</a>
</p>
*/
include("protect.php");

if(!isset($_SESSION["nome"])) {
    die("Você não está autorizado a acessar essa página.<p><a href=\"index.html\">Logar</a></p>");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/paginaprincipal.css">
    <title>Página Principal</title>
</head>
<body>
<div class="Container">
        <div class="Top">
            <h1>
                Bem-vinda, <?php echo $_SESSION['nome'] . '!'?> <br>
                Apoio á Amamentação
            </h1>
            <i class="Sino">
                <img src="../images/icons8-bell-30.png" alt="Notificações">
            </i>
            <i class="Config">
                <img src="../images/icons8-settings-30.png" alt="Configurações">
            </i>
        </div>
        <div class="Middle">
        </div>
    </div>
</body>
</html>