<?php
include_once("protect.php");
include_once("imagens.php");
include_once("../css/Estilos.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/config.css">
    <title>Apoio á Amamentação</title>
    <?php echo $Estilizacao_pagina; // Estilo do Cabeçalho e do rodapé da página ?>
</head>
<body>
    <div class="Container">
    <?php echo $Topo ?>
        <div class="Middle">
            <!-- Conteúdo da seção do meio -->
        </div>
        <div class="Middle">
            <button class="ConfigSistema"><a href="configsistema.php">Configuração do sistema</a></button>
        </div>
        <?php echo $Bottom ?>
    </div>
</body>
</html>