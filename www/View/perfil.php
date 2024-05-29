<?php

include_once("protect.php");
include_once("imagens.php");
include_once("../Model/unClasseConfig.php");
include_once("../css/Estilos.php");

$id_usuario = $_SESSION["idusuario"];

if(isset($_FILES["arquivo"])){
    $arquivo = $_FILES["arquivo"];
    
    if($arquivo["size"] > 2097152){
        die("Arquivo muito grande! Max: 2MB");
    }

    if($arquivo["error"]){
        die("Erro ao enviar o arquivo");
    }

    $pasta = "../Fotos_perfil/";
    $nomeArquivo = uniqid();
    $extensao = strtolower(pathinfo($arquivo["name"], PATHINFO_EXTENSION));

    date_default_timezone_set('America/Sao_Paulo');
    $time = date('Y-m-d H:i:s');

    // var_dump($_FILES["arquivo"]);
    // print_r(nl2br($extensao.PHP_EOL));


    // deletar a foto anterior
    $enviado = move_uploaded_file($arquivo["tmp_name"], $pasta . $nomeArquivo . "." . $extensao);
    $path = $pasta . $nomeArquivo . "." . $extensao;

    if($enviado){
        $mysqli->query("UPDATE fotos_perfil SET nome = '$nomeArquivo', data_upload ='$time', path = '$path' WHERE idusuario = $id_usuario") or die($mysqli->error);
        echo "foto enviada!";
    } else {
        die("Falha ao enviar a foto!");
    }
}

// Buscar local da foto no banco
$BuscaFoto = $mysqli->query("SELECT path FROM fotos_perfil where idusuario = '$id_usuario'") or die($mysqli->error);
$localFoto = $BuscaFoto->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/perfil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Configurações de perfil</title>
    <?php echo $Estilizacao_pagina; // Estilo do Cabeçalho e do rodapé da página ?>
</head>
<body>
    <div class="Container">
        <?php echo $Topo ?>
        <div class="Middle">
            <img src=<?php echo $localFoto["path"]; ?> alt="Foto de perfil do usuário">
            <form method="post" enctype="multipart/form-data" action="">
                <input type="file" name="arquivo">alterar foto
                <button name="upload" type="submit">enviar</button>
            </form>
            <p>
                <a href="logout.php">Sair</a>
            </p>
        </div>
        <?php echo $Bottom ?>
    </div>
</body>
</html>