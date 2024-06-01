<?php
include_once("../Controller/unClasseProtect.php");
include_once("imagens.php");
include_once("../css/Estilos.php");

$oProtect = new Procect();// instância para permitir o acesso somente a quem estiver logado
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
        <div class="IdiomaContainer">
                <button id="idiomaButton">Idioma</button>
                <div id="idiomaOptions" class="hidden">
                    <button onclick="changeLanguage('pt')">Português</button>
                    <button onclick="changeLanguage('en')">Inglês</button>
                    <button onclick="changeLanguage('es')">Espanhol</button>
                </div>
            </div>
            <a href=""><button>Notificações</button></a>
            <a href=""><button>Privacidade</button></a>
            <a class="ConfigSistema" href="configsistema.php"><button>Configuração do sistema</button></a>
            <a href="../Controller/unLogout.php"><button>Sair</button></a>
        </div>
        <?php echo $Bottom ?>
    </div>
    <script>
        document.getElementById('idiomaButton').addEventListener('click', function() {
            var idiomaOptions = document.getElementById('idiomaOptions');
            if (idiomaOptions.classList.contains('hidden')) {
                idiomaOptions.classList.remove('hidden');
            } else {
                idiomaOptions.classList.add('hidden');
            }
        });

        function changeLanguage(lang) {
            alert('Idioma alterado para: ' + lang);
            // Aqui você pode adicionar código para realmente mudar o idioma
        }
    </script>
</body>
</html>