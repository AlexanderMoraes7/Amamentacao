<?php
include_once("protect.php");
include_once("../css/Estilos.php");

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
        <div class="Top">
            <h1>
                Configuração do sistema
            </h1>
            <button class="Sino"><img src="../images/icons8-bell-30.png" alt="Notificações"></button>
            <a class="Config" href="config.php"><img src="../images/icons8-settings-30.png" alt="Configurações"></a>
        </div>
        <div class="Middle">
            <!-- Conteúdo da seção do meio -->
        </div>
        <div class="Bottom">
        <a class="Info" href="info.php"><img src="../images/icons8-about-64.png" alt="Informações"></a>
        <a class="Doadora" href="sejadoadora.php"><img src="../images/icons8-love-64.png" alt="Seja Doadora"></a>
        <a class="Feed" href="paginaprincipal.php"><img src="../images/icons8-home-64.png" alt="Página Principal"></a>
        <a class="Unidades" href="unidades.php"><img src="../images/icons8-hospital-64.png" alt="Unidades de doação de leite materno"></a>
        <a class="Perfil" href="perfil.php"><img src="../images/icons8-user-64.png" alt="Perfil do usuário"></a>
        <!-- Conteúdo da seção de baixo -->
        </div>
    </div>
</body>
</html>