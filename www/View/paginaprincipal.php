<?php

include("protect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal - Amamentação</title>
</head>
<body>
    <h1>Bem-vinda, <?php echo $_SESSION['nome']?></h1>
    <h2>Página principal de Apoio a Amamentação 💖</h2>
    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>