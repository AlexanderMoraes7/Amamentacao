<?php
include_once("protect.php");
include_once("../css/Estilos.php");
include_once("imagens.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/configsistema.css">
    <title>Configuração do sistema</title>
    <?php echo $Estilizacao_pagina; // Estilo do Cabeçalho e do rodapé da página ?>
</head>
<body>
    <div class="Container">
        <?php echo $Topo ?>
        <div class="Middle">
            <!-- Conteúdo da seção do meio -->
        </div>
        <?php echo $Bottom ?>
    </div>
</html>