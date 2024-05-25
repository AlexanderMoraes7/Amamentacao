<?php
/*
<h1>Bem-vinda, <?php echo $_SESSION['nome']?></h1>
<h2>Página principal de Apoio a Amamentação 💖</h2>
<p>
    <a href="logout.php">Sair</a>
</p>
*/
include("protect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/paginaprincipal.css">
    <title>Página Principal - Amamentação</title>
</head>
<body>
<div class="Container">
        <div class="Top">
            <h1>
                Perfil
            </h1>
            <i class="Sino">
                <img src="../images/icons8-bell-30.png" alt="ícone">
            </i>
            <i class="Config">
                <img src="../images/icons8-settings-30.png" alt="">
            </i>
        </div>
        <div class="Middle">
        </div>
    </div>
</body>
</html>